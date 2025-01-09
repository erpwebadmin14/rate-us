<?php
require __DIR__ . '/vendor/autoload.php';

$serviceAccountFile = '/var/www/php81/google-service-account-credentials.json';
// change $serviceAccountFile if url domain is like this: https://me.megaworldcorp.com
if ($_SERVER['HTTP_HOST'] == 'me.megaworldcorp.com') {
    $serviceAccountFile = '/var/www/php8/google-service-account-credentials.json';
}

$spreadsheetId = '1wEK7NcdKVdiMH__zAwc38M_JcpATuwCnrEiDyv2puGs';
