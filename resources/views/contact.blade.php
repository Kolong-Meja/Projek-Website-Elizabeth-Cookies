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

    <!-- navigation bar -->
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
            <a href="{{ url('/contact') }}"> <button type="button" class="btn btn-pink">Contact</button> </a>
            <a href="{{ url('/about') }}"> <button type="button" class="btn btn-pink">About</button> </a>
          </div>
        </li>
      </ul>
    </nav>

    <!-- content of the page -->
    <div class="container CardPutih">
      <div class="container-fluid bg-grey">
        <h2 class="text-center Header">CONTACT</h2>
        <div class="row">
          <div class="col-sm-5">
            <p>Kontak Kami Senin - Minggu Jam 07.00 - 21.00</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Pamulang, ID</p>
            <p><span class="glyphicon glyphicon-phone"></span> 0856 9342 6186</p>
            <p><span class="glyphicon glyphicon-envelope"></span> Rafiihanifyanto@gmail.com</p>
          </div>
          <div class="col-sm-7">
            <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
              <a href="https://www.maps.ie/draw-radius-circle-map/">Measure km radius</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
