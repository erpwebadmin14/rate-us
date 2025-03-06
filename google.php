<?php
require __DIR__ . '/vendor/autoload.php';

// $serviceAccountFile = '/var/www/php81/google-service-account-credentials.json';
// change $serviceAccountFile if url domain is like this: https://me.megaworldcorp.com
if ($_SERVER['HTTP_HOST'] == 'erpwebdev.megaworldcorp.com') {
    $serviceAccountFile = '/var/www/html/RB/rate-us/google-service-account-credentials.json';
    if ($_POST['c'] == 'WASHROOM') {
        $spreadsheetId = '10OvHrShcHan-ZK6JMxnc7pSM6YBBl_bw_LQ32E2VLuI';
    } 
} else {
    $spreadsheetId = '1qriXGdkl1jYfvwVgL-NVf9PQ1yhVYY-kAYfSuXHkFfY';
    $serviceAccountFile = 'C:\xampp\htdocs\rate-us\google-service-account-credentials.json';
}

// $spreadsheetId = '1wEK7NcdKVdiMH__zAwc38M_JcpATuwCnrEiDyv2puGs';



