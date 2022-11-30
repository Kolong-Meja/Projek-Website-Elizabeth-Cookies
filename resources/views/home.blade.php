<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('includes.head')
  </head>
  <body>
    <!-- navigation bar-->
    @include('includes.nav_bar')

    <!-- home page content -->
    <div class="hero-image">
      <div class="hero-text">
        <h1 class="FontPink">Elisabeth Cookies</h1>
        <p>Kami berusaha untuk selalu menghadirkan kemudahan bagi Anda. Gerai kami yang terus berkembang berlokasi di seluruh Indonesia, di mana Anda dapat memanjakan diri sendiri atau bersama orang-orang terkasih dalam lingkungan yang mewah dan hangat, suasana mengundang yang akan membuat Anda merasa seperti di rumah sendiri.</p>
        <a class="ProductButton" href="{{ url('/product') }}">Lihat Product Kami</a>
      </div>
    </div>
  </body>
</html>
