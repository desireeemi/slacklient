<?php

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => '"https://hooks.slack.com/services/T2R8ZMBQX/B2RS12C9K/EnQzYsuQQajCjnVaUJ',
CURLOPT_POST => 1,
CURLOPT_POSTFIELDS => array(
item1 => $_POST['userName'],
item2 => $_POST['messageContent']
)
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

