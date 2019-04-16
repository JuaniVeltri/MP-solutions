



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
  $preference->notification_url = "http://localhost:8000/api/notification.php";
  # Save and posting preference
  $preference->save();

?>

<html>

<link rel="stylesheet" href="../style.css">

<head>
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js" charset="UTF-8"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
      <div class="header">
        <a href="#default" class="logo">Mercado Pago Demos</a>
        <div class="header-right">
          <a href="../index.html">Home</a>
          <a class="active" href="../client/webCheckoutFront.php">Web Checkout</a>
          <a href="../client/webTokenize.php">Web Tokenize Checkout</a>
          <a href="../client/qrPuntoDeVenta.php">QR Punto de venta</a>
        </div>
      </div>
    </head>
 
<a mp-mode="dftl" href="<?php echo $preference->sandbox_init_point; ?>" name="MP-payButton" class='blue-ar-l-rn-none'>Pagar SandBox</a>
<script type="text/javascript">
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>

<a mp-mode="dftl" href="<?php echo $preference->init_point; ?>" name="MP-payButton" class='blue-ar-l-rn-none'>Pagar Productivo</a>
<script type="text/javascript">
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>

</body>


</html>