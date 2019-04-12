<html>

<link rel="stylesheet" href="../style.css">
<head>
        <div class="header">
            <a href="#default" class="logo">CompanyLogo</a>
            <div class="header-right">
              <a class="active" href="#home">Home</a>
              <a href="#contact">Contact</a>
              <a href="#about">About</a>
            </div>
          </div>
        </head>

<body>

<a mp-mode="dftl" href="<?php echo $preference->init_point; ?>" name="MP-payButton" class='blue-ar-l-rn-none'>Pagar</a>
<script type="text/javascript">
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>

</body>

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
  </html>