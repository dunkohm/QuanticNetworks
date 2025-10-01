<?php
include 'access_token.php';
// Load config
$config = require __DIR__ . '/../configs/config.php';

date_default_timezone_set('Africa/Nairobi');

// Step 1: Generate Access Token
$credentials = base64_encode($config['consumer_key'] . ':' . $config['consumer_secret']);
$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . $credentials]);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
if (curl_errno($curl)) {
    die('Curl error: ' . curl_error($curl));
}
curl_close($curl);

$result = json_decode($response);
$access_token = $result->access_token;

// Step 2: Initiate STK Push
$timestamp = date('YmdHis');
$password  = base64_encode($config['shortcode'] . $config['passkey'] . $timestamp);

$stk_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $stk_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $access_token
]);

$payload = [
    'BusinessShortCode' => $config['shortcode'],
    'Password'          => $password,
    'Timestamp'         => $timestamp,
    'TransactionType'   => 'CustomerPayBillOnline',
    'Amount'            => 1, // Always use 1 in sandbox
    'PartyA'            => '254708374149', // Test MSISDN
    'PartyB'            => $config['shortcode'],
    'PhoneNumber'       => '254708374149', // Test MSISDN
    'CallBackURL'       => $config['callback_url'],
    'AccountReference'  => 'Test123',
    'TransactionDesc'   => 'Testing M-Pesa STK Push'
];

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
if (curl_errno($curl)) {
    die('STK Push Error: ' . curl_error($curl));
}
curl_close($curl);

echo $response;
