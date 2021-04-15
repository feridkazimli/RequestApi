<?php 

require 'RequestApi.php';

// Authorization tokenini cekirik
// $auth_url = 'https://apiconnectdemo.quantum.az/v1/authorize';

// $auth_data = [
//     'response_type' => 'code',
//     'client_id' => 'internal_tpp_1',
//     'client_secret' => 'sGb*@14TrLn7C'
// ];

// $code = RequestApi::post($auth_url, $auth_data, array('Content-Type:text/plain'));

// print_r($code);

$url = 'https://newsapi.org/v2/everything?';

$body = [
    'q' => 'tesla',
    'from' => '2021-03-09',
    'sortBy' => 'publishedAt'
];

$data = RequestApi::get($url, $body, array('x-api-key: 401c78a0cde14323a2910ea7d3e22490'));

echo '<pre>';
print_r($data);