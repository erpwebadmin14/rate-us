<?php
require __DIR__ . '/vendor/autoload.php';

// Path to your service account key file
$serviceAccountFile = '/var/www/php81/google-service-account-credentials.json';

// Google Sheet ID and range
$spreadsheetId = '1wEK7NcdKVdiMH__zAwc38M_JcpATuwCnrEiDyv2puGs'; // Replace with your Google Sheet ID
$range = 'Sheet1!A1:D1'; // Replace with your sheet name and range

// Data to insert (each array represents a row)
$newRow = [
    [$_POST['q'], $_POST['rate'], date('Y-m-d H:i:s'), $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']]
];

try {
    // Initialize Google Client
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig($serviceAccountFile);

    // Initialize Google Sheets Service
    $service = new Google_Service_Sheets($client);

    // Insert data
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $newRow
    ]);
    $params = [
        'valueInputOption' => 'RAW' // or 'USER_ENTERED'
    ];

    // Append data to the sheet
    $result = $service->spreadsheets_values->append(
        $spreadsheetId,
        $range,
        $body,
        $params
    );

    echo $result->getUpdates()->getUpdatedCells();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
