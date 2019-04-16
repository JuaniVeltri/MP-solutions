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
          <a class="active" href="webCheckoutFront.php">Web Checkout</a>
          <a href="webTokenize.php">Web Tokenize Checkout</a>
          <a href="qrPuntoDeVenta.php">QR Punto de venta</a>
        </div>
      </div>
    </head>

<h1>Web Checkout</h1>

<form action="../api/checkout.php" method="POST">
  <p>Monto
    <input type="text" name="monto" value="">
  </p>
  <p>Email
    <input type="text" name="email" value="">
  </p>
  <p>Unidades
    <input type="text" name="cantidad" value="">
  </p>

  <input type="submit" />

</form>


</html>