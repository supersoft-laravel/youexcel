<?php

class BotBlockerPro
{
	function __construct() {
		$this->domain = 'https://botblocker.pro';
	}
	function getClientIP() {
		// Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        
        return $ip;
	}
	function isCurlEnable(){
		return function_exists('curl_version');
	}
	function httpGet($url, $code = false){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 KBTv (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		if($code) {
			$response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		} else {
			$response = curl_exec($ch);
		}
		return $response;
	}
	function httpPost($url , $array){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array));
		curl_setopt($ch, CURLOPT_USERAGENT, 'KMozilla/5.0 KBTv (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$response = curl_exec($ch);
		return $response;
	}
	function json($respons){
		return json_decode($respons,true);
	}
	function connection($apiKey){
		$url 		= $this->domain."/api/v1/usage?apikey=".$apiKey;
		$respons 	= $this->httpGet($url);
		$json		= $this->json($respons);
		$connection = $json['meta']['code'] == 200 ? true : false;
		$error 		= $json['meta']['message'] ? $json['meta']['message'] : $this->httpGet($url, true);
		return $connection ? [true] : [false, $error];
	}
	function redirect($apiKey, $keyName, $skip = false){
		$url 		= $this->domain."/api/v1/shortlink?ip=".$this->getClientIP()."&apikey=".$apiKey."&keyname=".$keyName."&ua=".urlencode($_SERVER['HTTP_USER_AGENT'])."&url=".urlencode($_SERVER['REQUEST_URI'])."&skip=".$skip;
		$respons 	= $this->httpGet($url);
		return $respons;
	}
	function error($code, $siteKey = null, $keyName = null){
		$template = file_get_contents('template/main.html');
		switch ($code) {
			case 'self_401':
				header('HTTP/1.0 401 Unauthorized');
				$template = str_replace("{text}", "401 Unauthorized", $template);
				$template = str_replace("{error_message}", "Invalid validation.", $template);
				die($template);
			break;
			case 'self_403':
				header('HTTP/1.0 403 Forbidden');
				$template = str_replace("{text}", "403 Forbidden", $template);
				$template = str_replace("{error_message}", "You dont have authorization to view this page.", $template);
				die($template);
			break;
			case 'self_404':
				header("HTTP/1.0 404 Not Found");
				$template = str_replace("{text}", "404 Not Found", $template);
				$template = str_replace("{error_message}", "The requested was not found on this server.", $template);
				die($template);
			break;
			case 'self_verification':
				header('HTTP/1.0 403 Forbidden');
				$verify = file_get_contents('template/recaptcha.html');
				$verify = str_replace("{text}", "Human Verification", $verify);
				$verify = str_replace("{error_message}", "Click the button below to verify that you are a real human.", $verify);
				$verify = str_replace("{keyName}", $keyName, $verify);
				$verify = str_replace("{siteKey}", $siteKey, $verify);
				die($verify);
			break;
			case 'self_suspend':
				header('HTTP/1.0 410 Gone');
				$suspend = file_get_contents('template/suspend.html');
				$suspend = str_replace("{text}", "Link Blocked", $suspend);
				die($suspend);
			break;
			default:
				die(header("Location: ".$code));
			break;
		}
	}
}