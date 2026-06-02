<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Google\Analytics\Data\V1beta\Client\BetaAnalyticsDataClient;
use Google\Analytics\Data\V1beta\RunReportRequest;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\OrderBy;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    private function runGAReport(BetaAnalyticsDataClient $client, array $params)
    {
        $response = $client->runReport(new RunReportRequest($params));
        return $response;
    }

    public function index(Request $request)
    {
        try {
            $client = new BetaAnalyticsDataClient([
                'credentials' => storage_path('app/google/analytics.json'),
            ]);

            $propertyId = 316897236;
            // $dateRange = new DateRange([
            //     'start_date' => '30daysAgo',
            //     'end_date'   => 'today',
            // ]);
            
            $startDate = $request->get('start_date')
                ? Carbon::parse($request->start_date)->format('Y-m-d')
                : '30daysAgo';
            
            $endDate = $request->get('end_date')
                ? Carbon::parse($request->end_date)->format('Y-m-d')
                : 'today';
            
            $dateRange = new DateRange([
                'start_date' => $startDate,
                'end_date'   => $endDate,
            ]);

            $kpiResponse = $this->runGAReport($client, [
                'property' => 'properties/' . $propertyId,
                'date_ranges' => [$dateRange],
                'metrics' => [
                    new Metric(['name' => 'activeUsers']),
                    new Metric(['name' => 'totalUsers']),
                    new Metric(['name' => 'newUsers']),
                    new Metric(['name' => 'screenPageViews']),
                    new Metric(['name' => 'sessions']),
                    new Metric(['name' => 'engagedSessions']),
                    new Metric(['name' => 'averageSessionDuration']),
                    new Metric(['name' => 'bounceRate']),
                    new Metric(['name' => 'eventCount']),
                ],
            ]);

            $rows = $kpiResponse->getRows() ?? [];

            $kpiRow = isset($rows[0]) ? $rows[0]->getMetricValues() : [];

            $kpis = [
                'activeUsers' => isset($kpiRow[0]) ? $kpiRow[0]->getValue() : 0,
                'totalUsers'  => isset($kpiRow[1]) ? $kpiRow[1]->getValue() : 0,
                'newUsers'    => isset($kpiRow[2]) ? $kpiRow[2]->getValue() : 0,
                'pageViews'   => isset($kpiRow[3]) ? $kpiRow[3]->getValue() : 0,
                'sessions'    => isset($kpiRow[4]) ? $kpiRow[4]->getValue() : 0,
                'engaged'     => isset($kpiRow[5]) ? $kpiRow[5]->getValue() : 0,
                'avgSession'  => isset($kpiRow[6]) ? round($kpiRow[6]->getValue(), 2) : 0,
                'bounceRate'  => isset($kpiRow[7]) ? round($kpiRow[7]->getValue(), 2) : 0,
                'events'      => isset($kpiRow[8]) ? $kpiRow[8]->getValue() : 0,
            ];
            $processRows = function($response, $dimCount, $metricCount, $label = '') {
                $result = [];
                foreach ($response->getRows() ?? [] as $row) {
                    $dims = $row->getDimensionValues() ?? [];
                    $metrics = $row->getMetricValues() ?? [];
                    $item = [];
                    for ($i = 0; $i < $dimCount; $i++) {
                        $item[] = isset($dims[$i]) ? $dims[$i]->getValue() : '';
                    }
                    for ($i = 0; $i < $metricCount; $i++) {
                        $item[] = isset($metrics[$i]) ? $metrics[$i]->getValue() : 0;
                    }
                    $result[] = $item;
                }
                return $result;
            };

            $pagesResponse = $this->runGAReport($client, [
                'property' => 'properties/' . $propertyId,
                'date_ranges' => [$dateRange],
                'dimensions' => [new Dimension(['name' => 'pagePath'])],
                'metrics' => [
                    new Metric(['name' => 'screenPageViews']),
                    new Metric(['name' => 'averageSessionDuration']),
                    new Metric(['name' => 'bounceRate']),
                ],
                'order_bys' => [
                    new OrderBy([
                        'metric' => new OrderBy\MetricOrderBy(['metric_name' => 'screenPageViews']),
                        'desc' => true,
                    ]),
                ],
                'limit' => 10,
            ]);
            $topPagesRaw = $processRows($pagesResponse, 1, 3, 'Top Pages');
            $topPages = [];
            foreach ($topPagesRaw as $row) {
                $topPages[] = [
                    'page' => $row[0],
                    'views' => $row[1],
                    'avgTime' => round($row[2], 2),
                    'bounceRate' => round($row[3], 2),
                ];
            }

            $sourceResponse = $this->runGAReport($client, [
                'property' => 'properties/' . $propertyId,
                'date_ranges' => [$dateRange],
                'dimensions' => [new Dimension(['name' => 'sessionDefaultChannelGroup'])],
                'metrics' => [new Metric(['name' => 'sessions'])],
            ]);
            $trafficSourcesRaw = $processRows($sourceResponse, 1, 1, 'Traffic Sources');
            $trafficSources = [];
            foreach ($trafficSourcesRaw as $row) {
                $trafficSources[] = ['source' => $row[0], 'sessions' => $row[1]];
            }

            $deviceResponse = $this->runGAReport($client, [
                'property' => 'properties/' . $propertyId,
                'date_ranges' => [$dateRange],
                'dimensions' => [new Dimension(['name' => 'deviceCategory'])],
                'metrics' => [new Metric(['name' => 'activeUsers'])],
            ]);
            $devicesRaw = $processRows($deviceResponse, 1, 1, 'Devices');
            $devices = [];
            foreach ($devicesRaw as $row) {
                $devices[] = ['device' => $row[0], 'users' => $row[1]];
            }

            $countryResponse = $this->runGAReport($client, [
                'property' => 'properties/' . $propertyId,
                'date_ranges' => [$dateRange],
                'dimensions' => [new Dimension(['name' => 'country'])],
                'metrics' => [new Metric(['name' => 'activeUsers'])],
                'limit' => 10,
            ]);
            $countriesRaw = $processRows($countryResponse, 1, 1, 'Countries');
            $countries = [];
            foreach ($countriesRaw as $row) {
                $countries[] = ['country' => $row[0], 'users' => $row[1]];
            }

            return view('adminpanel.kpi-dashboard', compact(
                'kpis', 'topPages', 'trafficSources', 'devices', 'countries'
            ));

        } catch (\Throwable $th) {
            Log::error('KPI Data Failed', ['error' => $th->getMessage()]);
            return back()->with('error', 'Dashboard analytics load failed.');
        }
    }
}
