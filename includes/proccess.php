<?php
/**
*
* Engine Proses Dengan PHP cURL
* Last Update : 20 Agustus 2018
*
**/

/** Variable Yang Dibutuhkan **/
$api_url    = "https://panel.hostddns.us/api/v1/order/"; // Stable API Url v1 
$api_key    = "YOUR API KEY"; // Your User API Key (Mohon Jangan Ada Karakter Spasi !)
$service    = $_POST['service']; // Service, Available A, NS, CNAME & MX
$domain     = $_POST['domain']; // Domain Name
$subdomain  = $_POST['subdomain']; // Subdomain Name to Create
$content    = $_POST['content']; // Example Content IP or Domain Address
/** End Variable **/

/** cURL Prosess **/
$ch         = curl_init();
curl_setopt($ch, CURLOPT_URL, "$api_url?key=$api_key&service=$service&domain=$domain&subdomain=$subdomain&content=$content");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
$result     = curl_exec($ch);
$newarray = json_decode(trim($result), TRUE);
$status = $newarray["success"];
$message = $newarray["message"];
if($status == 'false'){
	echo "<pre>Message : " .$message."</pre>";
} else {
	echo "<pre>" .$result. "</pre>";
}
/** End cURL Prosess **/
?>
