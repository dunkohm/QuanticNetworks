<?php
$consumerKey    = "lY1ByZCKF9UuFRczrGRiaGPtC611nwoEko3fq5pszW0DLwjU"; 
$consumerSecret = "vallXLP89eCqGAFY10JvGpe5UpzsSfvGwMVe7AnXLAAlsSKAsB3MOZ2xOZTpMh6N"; 

$url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
$credentials = base64_encode($consumerKey . ":" . $consumerSecret);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, ["Authorization: Basic $credentials"]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // disable SSL for sandbox
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($curl);

if ($response === false) {
    die("cURL Error: " . curl_error($curl));
}

curl_close($curl);

echo $response;
