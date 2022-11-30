<!-- navigation bar template -->
<nav class="navbar navbar-expand-sm bg-black">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="" href="{{ url('/') }}">
            <img class="img-fluid" src="image/Logo.png" alt="Logo" width="63" height="54">
        </a>
        <a class="Fontlogo" href="{{ url('/product') }}">Elisabeth Cookies</a>
      </li>
        @if (Auth::guest())
            <li>
                <a href="{{ url('login') }}">Login</a>
            </li>
            <li>
                <a href="{{ url('register') }}">Register</a>
            </li>
        @else
            <li>
                <a href="{{ url('logout')}}">Logout</a>
            </li>
        @endif
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