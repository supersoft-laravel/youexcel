@extends('adminpanel.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">KPI Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">KPI Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

<section class="content">
<div class="container-fluid">
    
    <form method="GET" action="{{ route('kpi-dashboard') }}" class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <label>Start Date</label>
                <input type="date" name="start_date"
                       value="{{ request('start_date') }}"
                       class="form-control">
            </div>
    
            <div class="col-md-3">
                <label>End Date</label>
                <input type="date" name="end_date"
                       value="{{ request('end_date') }}"
                       class="form-control">
            </div>
    
            <div class="col-md-3 d-flex align-items-end">
                <button class="btn btn-primary">Apply</button>
            </div>
        </div>
    </form>


{{-- ================= KPI CARDS ================= --}}
<div class="row">
@php
$cards = [
    ['title'=>'Active Users','value'=>$kpis['activeUsers'],'bg'=>'info','help'=>'Users currently active on the website.'],
    ['title'=>'Total Users','value'=>$kpis['totalUsers'],'bg'=>'success','help'=>'Total unique users in selected date range.'],
    ['title'=>'New Users','value'=>$kpis['newUsers'],'bg'=>'warning','help'=>'Users who visited for the first time.'],
    ['title'=>'Page Views','value'=>$kpis['pageViews'],'bg'=>'primary','help'=>'Total number of pages viewed.'],
    ['title'=>'Sessions','value'=>$kpis['sessions'],'bg'=>'secondary','help'=>'Total browsing sessions started by users.'],
    ['title'=>'Engaged Sessions','value'=>$kpis['engaged'],'bg'=>'dark','help'=>'Sessions with meaningful interaction.'],
    ['title'=>'Avg Session (sec)','value'=>$kpis['avgSession'],'bg'=>'info','help'=>'Average time users spend per session.'],
    ['title'=>'Bounce Rate %','value'=>$kpis['bounceRate'],'bg'=>'danger','help'=>'Percentage of users who leave without interaction.'],
];
@endphp


@foreach($cards as $card)
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="small-box bg-{{ $card['bg'] }}">
        <div class="inner">
            <h3>{{ $card['value'] }}</h3>
            <p>
                {{ $card['title'] }}
                <i class="fas fa-info-circle ml-1"
                   data-toggle="tooltip"
                   title="{{ $card['help'] }}"
                   style="cursor:pointer;"></i>
            </p>
        </div>
    </div>
</div>
@endforeach
</div>

{{-- ================= TOP PAGES ================= --}}
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Top Pages</h3>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Page</th>
                    <th>Views</th>
                    <th>Avg Time</th>
                    <th>Bounce %</th>
                </tr>
            </thead>
            <tbody>
                @foreach($topPages as $page)
                <tr>
                    <td>{{ $page['page'] }}</td>
                    <td>{{ $page['views'] }}</td>
                    <td>{{ $page['avgTime'] }}</td>
                    <td>{{ $page['bounceRate'] }}%</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

{{-- ================= TRAFFIC + DEVICES ================= --}}
<div class="row">

<div class="col-md-6">
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Traffic Sources</h3>
    </div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>Source</th>
                    <th>Sessions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trafficSources as $row)
                <tr>
                    <td>{{ $row['source'] }}</td>
                    <td>{{ $row['sessions'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

<div class="col-md-6">
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Devices</h3>
    </div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>Device</th>
                    <th>Users</th>
                </tr>
            </thead>
            <tbody>
                @foreach($devices as $row)
                <tr>
                    <td>{{ ucfirst($row['device']) }}</td>
                    <td>{{ $row['users'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>

</div>

{{-- ================= COUNTRIES ================= --}}
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Top Countries</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Users</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $row)
                <tr>
                    <td>{{ $row['country'] }}</td>
                    <td>{{ $row['users'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

</div>
</section>
</div>
@endsection
