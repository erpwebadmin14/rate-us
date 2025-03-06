<?php
require 'google.php';
$range = 'Sheet1!A2:J2'; // Replace with your sheet name and range

// Data to insert (each array represents a row)
$category = 'Default';
if (!empty(trim($_POST['c'])))
    $category = strtoupper($_POST['c']); 

$floor = (int) $_POST['f'];
$office = $_POST['o'];
$gender = $_POST['g'];
$type = $_POST['t'];
$rating = (int) $_POST['rate'];
$date = date('m/d/Y');
$time = date('H:i:s');
$comment = strtoupper($_POST['comment']);
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Chrome') !== false) {
    $userAgent = 'Google Chrome';
} elseif (strpos($userAgent, 'Firefox') !== false) {
    $userAgent = 'Mozilla Firefox';
} elseif (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
    $userAgent = 'Internet Explorer';
} elseif (strpos($userAgent, 'Safari') !== false) {
    $userAgent = 'Apple Safari';
} elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR') !== false) {
    $userAgent = 'Opera';
} else {
    $userAgent = 'Unknown Browser';
}

if($gender = 'F'){
    $gender = 'Female';
} elseif ($gender = 'M'){
    $gender = 'Male';
} elseif ($gender = 'P'){
    $gender = 'PWD';
} else {
    $gender = 'Unknown';
}

if($type = 'E'){
    $type = 'Employee';
} elseif ($type = 'C') {
    $type = 'Client';
} elseif ($type = 'V'){
    $type = 'Visitor';
} 

$newRow = [
    [$category, $office, $floor, $gender, $type, $rating, $comment, $date, $time, $userAgent]
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
