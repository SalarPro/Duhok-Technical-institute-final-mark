<?php

$url = "https://freecurrencyapi.net/api/v2/latest?apikey=9d1e2b10-7a02-11ec-95c4-d9cc216cc1df";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);

//echo($response);

$jss = json_decode($response);

$jss2 = $jss->data->IQD;

print_r($jss2);

