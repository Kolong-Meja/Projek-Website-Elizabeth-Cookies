<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('includes.head')
  </head>
  <body>

    <!-- navigation bar -->
    @include('includes.nav_bar')

    <!-- contact page content -->
    <div class="container CardPutih">
      <div class="container-fluid bg-grey">
        <h2 class="text-center Header">CONTACT</h2>
        <div class="row">
          <div class="col-sm-5">
            @foreach($admin as $a)
            <p>Toko Elizabeth Cookies</p>
              <p>Kontak Kami Senin - Minggu Jam 07.00 - 21.00</p>
              <p><span class="glyphicon glyphicon-map-marker">Alamat: </span> Pamulang, ID</p>
              <p><span class="glyphicon glyphicon-phone">No Telp: </span>{{ $a->mobile }}</p>
              <p><span class="glyphicon glyphicon-envelope">Email: </span> {{ $a->email }}</p>
            @endforeach
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
