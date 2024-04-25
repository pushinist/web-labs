<?php
require "vendor/autoload.php";


$client = new \Google_Client();
$client->setApplicationName('AVITO ONLINE announcements');
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
$client->setAccessType('offline');
$path = 'credentials.json';
$client->setAuthConfig($path);

// configure the Sheets Service
$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1YjPHk_M1yt4rDjwSC2Gw22Fbw64JRllw2M-LvZPgP38';



if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $email = $_POST['email'] ?? '';
    $title = $_POST['title'] ?? '';
    $category = $_POST['categories'] ?? '';
    $description = $_POST['text'] ?? '';

        // Данные для записи
        $values = [
            [$email, $title, $category, $description]
        ];
    }

    // Определение диапазона для записи
    $range = 'Лист1';

    // Записываем данные в таблицу
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);
    $params = [
        'valueInputOption' => 'RAW'
    ];

    // Выполняем запись данных
    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

header('Location: index.php');
exit();
?>
