<?php
$consumerKey = "E2oabpRwTMMWWo8AXfp6KEQiyhmmUfJhpAPwuFGLSGAlhXve"; // Replace with your consumer key
$consumerSecret = "99KznJkMrQfVSxrsIDTG3pi9CRxHUe5bFNSGLkuq6lJZZzhEIjdq0BIWNYz5PAHy"; // Replace with your consumer secret


// Acess token url


$access_token_url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
$headers = ['Content-Type:application/json; charset=utf8'];

$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);

$result = curl_exec($curl);
curl_close($curl);
echo $result;
// $access_token = json_decode($result)->access_token;
// echo $access_token;
?>
