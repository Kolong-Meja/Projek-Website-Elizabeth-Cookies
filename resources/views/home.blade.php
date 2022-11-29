<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="Logo.png">
    <title>Elisabeth Cookies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-black">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="" href="#"></a>
          <img class="img-fluid" src="image/Logo.png" alt="Logo" width="63" height="54">
          <a class="Fontlogo">Elisabeth Cookies</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="Nav-edit">
          <div class="btn-group">
            <a href="{{ url('/') }}"> <button type="button" class="btn btn-pink">Home</button> </a>
            <a href="{{ url('/product') }}"> <button type="button" class="btn btn-pink">Product</button> </a>
            <a href="{{ url('/contact')}}"> <button type="button" class="btn btn-pink">Contact</button> </a>
            <a href="{{ url('/about') }}"> <button type="button" class="btn btn-pink">About</button> </a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="hero-image">
      <div class="hero-text">
        <h1 class="FontPink">Elisabeth Cookies</h1>
        <p>Kami berusaha untuk selalu menghadirkan kemudahan bagi Anda. Gerai kami yang terus berkembang berlokasi di seluruh Indonesia, di mana Anda dapat memanjakan diri sendiri atau bersama orang-orang terkasih dalam lingkungan yang mewah dan hangat, suasana mengundang yang akan membuat Anda merasa seperti di rumah sendiri.</p>
        <a class="ProductButton" href="Product.html">Lihat Product Kami</a>
      </div>
    </div>
  </body>
</html>
