<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('includes.head')
  </head>
  <body>
    <!-- navigation bar -->
    @include('includes.nav_bar')

    <!-- about page content -->
    <div class="container CardPutih">
      <h1 class="Header">About</h1>
      @foreach($content as $c)
      <p>
        {{ $c->content }}
      </p>
      @endforeach
    </div>
  </body>
</html>
