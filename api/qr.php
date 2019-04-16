<?php


$name = $_REQUEST["name"];
$fixed_amount = true;
$category = $_REQUEST["category"];
$external_id = $_REQUEST["external_id"];


echo $name;
echo $fixed_amount;
echo $category;
echo $external_id;


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.mercadopago.com/pos?access_token=TEST-fcdac5c4-d20f-42a8-adcd-3913a5dd38d5');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n    \"name\":$name, \n    \"fixed_amount\": $fixed_amount,\n    \"category\": $category,\n    \"external_id\": $external_id\n}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

?>