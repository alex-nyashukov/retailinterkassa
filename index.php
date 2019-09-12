<?php
require_once 'vendor/autoload.php';
use Interkassa\Api;

$api = new Api();
$user = '5d7918a51ae1bd13008b456a';
$password = 'Ji6wM0W9Dexs2AzfdWZ8wwvDBfYHXvJ8';

$items = $api->getAccountList($user, $password);

echo "<xmp>";
var_dump($items);

// $client = new \RetailCrm\ApiClient(
//     'https://fonarik2.retailcrm.ru',
//     '7hPuI0rgDplfpR2fccJ7FAGEakXXQks5',
//     \RetailCrm\ApiClient::V5,
//     'Fonarik.com'
// );

// try {
//     // $response = $client->request->ordersGet('15300');
//     $response = $client->request->ordersEdit(
//         [
//             'id' => '38717',
//             'lastName' => '12345',
//         ],
//         'id'
//     );
// } catch (\RetailCrm\Exception\CurlException $e) {
//     echo "Connection error: " . $e->getMessage();
// }

// if ($response->isSuccessful()) {
//        $order = $response->getOrder();
//        echo "<xmp>";
//        var_dump($order);
// } else {
//     echo sprintf(
//         "Error: [HTTP-code %s] %s",
//         $response->getStatusCode(),
//         $response->getErrorMsg()
//     );
// }