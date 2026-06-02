<?php

/**
 * Configuration settings for BotBlocker.Pro and Google reCAPTCHA v3 integration.
 * 
 * @var array $config Configuration options for the API and reCAPTCHA services.
 * 
 * - 'apiKey': (Required) Your BotBlocker.Pro API Key. Get it from https://botblocker.pro/developer.
 * - 'siteKey': (Optional) Your Google reCAPTCHA v3 Site Key. Create one at https://www.google.com/recaptcha/admin/create.
 * - 'secretKey': (Optional) Your Google reCAPTCHA v3 Secret Key. Create one at https://www.google.com/recaptcha/admin/create.
 */
$config = [
    'apiKey' => 'TYS5GVm3lrHbm5BPsNSefDc9PS_z-GVQnc52Zgw_PQ5T2',        // Required: BotBlocker.Pro API Key (https://botblocker.pro/developer)
    'siteKey' => '6LcCcgErAAAAAMj6AI5jc5za50PCchfFValVBY7Y',      // Optional: Google reCAPTCHA v3 Site Key (https://www.google.com/recaptcha/admin/create)
    'secretKey' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',  // Optional: Google reCAPTCHA v3 Secret Key (https://www.google.com/recaptcha/admin/create)
];
