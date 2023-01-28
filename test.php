<?php 

$params['hashsupport'] = "FREEQTI8";
$params['action'] = "start"; //Actions possible : start stop restart kill

$curl = curl_init();
$array = [
  'Authorization: V3cmaz1DGTwnqn7c6WyVCA12YXCtUXaaXHkkNTDk6n1bRTwzBLBcWyaNhKf4iN2T'
];
$opts = [
  CURLOPT_URL => 'https://rest.minestrator.com/api/v1/server/action',
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $params,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $array,
];

curl_setopt_array($curl, $opts);
$reponse = curl_exec($curl);
curl_close($curl);

echo '<pre>';
$yolo = json_decode($reponse);
echo json_encode($yolo, JSON_PRETTY_PRINT);
echo '</pre>';