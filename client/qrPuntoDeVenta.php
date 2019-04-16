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
          <a href="webTokenize.php">Web Tokenize Checkout</a>
          <a class="active" href="qrPuntoDeVenta.php">QR Punto de venta</a>
        </div>
      </div>
    </head>

    <h1>Paso 1</h1>
    <h2>Generar QR</h2>

<form action="../api/qr.php" method="POST">
  <p>Name
    <input type="text" name="name" value="">
  </p>
  <p>category
    <input type="text" name="category" value="">
  </p>
  <p>external_id
    <input type="text" name="external_id" value="">
  </p>

  <input type="submit" value="Crear QR" />

</form>
    


</html>