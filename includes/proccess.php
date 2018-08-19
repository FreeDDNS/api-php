<?php
/**
*
* Engine Proses Dengan PHP cURL
* Last Update : 19 Agustus 2018
*
**/

/** Variable Yang Dibutuhkan **/
$api_key    = "17016df8c9bb94660bd422a1c1713c9c"; // Your User API Key (Mohon Jangan Ada Karakter Spasi !)
$service    = $_POST['service']; // Service, Available A, NS, CNAME & MX
$domain     = $_POST['domain']; // Domain Name
$subdomain  = $_POST['subdomain']; // Subdomain Name to Create
$content    = $_POST['content']; // Example Content IP or Domain Address

/** cURL Prosess **/
$ch         = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://panel.hostddns.us/api/v1/order/?key=$api_key&service=$service&domain=$domain&subdomain=$subdomain&content=$content");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$result     = curl_exec($ch);
echo $result;
?>
