<?php

// Disable error reporting for cleaner output
error_reporting(0);

// Include necessary files
require_once('lib/main.php');
require_once('config.php');

// Initialize BotBlockerPro
$blocker = new BotBlockerPro();

if($_GET['keyName']) {
    $respons = $blocker->redirect($config['apiKey'], $_GET['keyName']);
    $json = $blocker->json($respons);

    if($json['data']['block_access'] == true){
        if($json['data']['direct_url'] == 'self_verification') {
            $blocker->error('self_verification', $config['siteKey'], $_GET['keyName']);
        } else {
            $blocker->error($json['data']['direct_url']);
        }
    }
    if(empty($json['data']['direct_url'])){
        $blocker->error('self_404');
    }
    // Redirection with UTM tracking
    list($_, $tracking) = explode('?', $_SERVER['REQUEST_URI']);
    if(empty($tracking)) {
        die(header("Location: " . $json['data']['direct_url']));
    }
    $direction = preg_match('/\?/i', $json['data']['direct_url']) ? $json['data']['direct_url'] . '&' . $tracking : $json['data']['direct_url'] . '?' . $tracking;
    die(header("Location: " . $direction));
} else {
    $blocker->error('self_404');
}