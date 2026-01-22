<?php
// api.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$id = $_GET['id'] ?? '17';
$url = "https://metroapi.alexbadi.es/v1/prevision/" . $id;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Identificació obligatòria segons documentació 2026
curl_setopt($ch, CURLOPT_USERAGENT, "ferroval-app/1.0 (Web; contact=info@ferroval.es)");

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>