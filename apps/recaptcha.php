<?php

// Disable error reporting for cleaner output
error_reporting(0);

// Include necessary files
require_once('lib/main.php');
require_once('config.php');

// Initialize BotBlockerPro
$blocker = new BotBlockerPro();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptchaSecretKey = $config["secretKey"];
    $recaptchaToken = $_POST["g-recaptcha-response"];
    $keyName = $_POST["keyName"];

    if(empty($recaptchaSecretKey)) {
        // Skip reCAPTCHA v3 verification
        $respons = $blocker->redirect($config['apiKey'], $keyName, true);
        $json = $blocker->json($respons);

        if(empty($json['data']['direct_url'])){
            $blocker->error('self_404');
        }

        die(header("Location: " . $json['data']['direct_url']));
    }

    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        "secret" => $recaptchaSecretKey,
        "response" => $recaptchaToken,
    ];

    $options = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded",
            "method" => "POST",
            "content" => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $responseData = json_decode($result, true);

    if ($responseData["success"] == true && $responseData["action"] == "form_submission" && $responseData["score"] >= 0.5) {
        $respons = $blocker->redirect($config['apiKey'], $keyName, true);
        $json = $blocker->json($respons);

        if(empty($json['data']['direct_url'])){
            $blocker->error('self_404');
        }

        die(header("Location: " . $json['data']['direct_url']));
    } else {
        $blocker->error('self_401');
    }
} else {
    $blocker->error('self_403');
}