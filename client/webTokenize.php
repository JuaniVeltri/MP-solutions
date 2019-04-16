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
          <a href="webCheckoutFront.php">Web Checkout</a>
          <a class="active" href="webTokenize.php">Web Tokenize Checkout</a>
          <a href="qrPuntoDeVenta.php">QR Punto de venta</a>
        </div>
      </div>
    </head>

<h1>Web Tokenize Checkout</h1>


<form action="../api/procesar-pago.php" method="POST">
  <script src="https://www.mercadopago.com.ar/integrations/v1/web-tokenize-checkout.js"
    data-public-key="TEST-fcdac5c4-d20f-42a8-adcd-3913a5dd38d5" data-transaction-amount="100.00">
    </script>
</form>



</html>