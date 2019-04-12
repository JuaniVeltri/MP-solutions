<?php

require_once '../vendor/autoload.php';

MercadoPago\SDK::setClientId("2017422744540661");
MercadoPago\SDK::setClientSecret("kT6x5kuLRj4v0kV0FUm3dSOpYBpzUC5v");


$monto = $_POST['monto'];
$email = $_POST['email'];
$cantidad = $_POST['cantidad'];


  # Create a preference object
  $preference = new MercadoPago\Preference();
  # Create an item object
  $item = new MercadoPago\Item();
  $item->title = "Heavy Duty Concrete Gloves";
  $item->quantity = $cantidad;
  $item->currency_id = "ARS";
  $item->unit_price = $monto;
  # Create a payer object
  $payer = new MercadoPago\Payer();
  $payer->email = "test@test.com.ar";
  # Setting preference properties
  $preference->items = array($item);
  $preference->marketplace_fee = 15;
  $preference->payment_methods = array(
        "excluded_payment_types" => array(
                (object) ["id" => "ticket"],
                (object) ["id" => "atm"],
        )
     );
  # Save and posting preference
  $preference->save();

  echo $preference->init_point;
  echo $monto;


?>