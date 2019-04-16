<?php


$token = $_REQUEST["token"];
$payment_method_id = $_REQUEST["payment_method_id"];
$installments = $_REQUEST["installments"];
$issuer_id = $_REQUEST["issuer_id"];

echo("Token Generado: " . $token . "<br>");
echo("payment method: " . $payment_method_id . "<br>");
echo("cantidad de cuotas: " . $installments . "<br>");
echo("issuer id generado: " . $issuer_id . "<br>");


require_once '../vendor/autoload.php'; 

  MercadoPago\SDK::setAccessToken("TEST-2017422744540661-011508-bd0567bfbaa03d2930c8542f256ac670-133380287");
    //...
    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = 108;
    $payment->token = $token;
    $payment->description = "Fantastic Wooden Computer";
    $payment->installments = $installments;
    $payment->payment_method_id = $payment_method_id;
    $payment->issuer_id = $issuer_id;
    //$payment->notification_url = "";
    $payment->payer = array(
    "email" => "tasdasdafsaest@test.com.ar"
    );
    // Save and posting the payment
    $payment->save();
    //...
    // Print the payment status
    echo("Payment Status: " . $payment->status . "<br>");
    echo ("Payment ID: " . $payment->id . "<br>");
    //...
?>