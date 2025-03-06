<?php

require 'google.php';

$range = 'Sheet1!A2:J'; // Columns: Category, Rating, Timestamp

try {
    // Initialize Google Client
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
    $client->setAuthConfig($serviceAccountFile);

    // Initialize Google Sheets Service
    $service = new Google_Service_Sheets($client);

    // Fetch data
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();

    // Process rows into JSON format
    $data = [];
    foreach ($values as $row) {
        if (isset($row[0], $row[1], $row[2], $row[5], $row[7])) {
            $data[] = [
                'category' => $row[0],
                'floor' => $row[1],
                'office' => $row[2],
                'rating' => (int) $row[5],
                'timestamp' => date('Y-m-d', strtotime($row[7]))
            ];
        }
    }

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($data);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>