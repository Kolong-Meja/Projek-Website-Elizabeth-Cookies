<!-- navigation bar template -->
<nav class="navbar navbar-expand-sm bg-black">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="" href="{{ url('/') }}">
            <img class="img-fluid" src="image/Logo.png" alt="Logo" width="63" height="54">
        </a>
        <a class="Fontlogo" href="{{ url('/product') }}">Elisabeth Cookies</a>
      <li class="Nav-edit">
        @if (Auth::guest())
            <li>
              <li>
                <div class="btn-group-2">
                  <a href="{{ url('login') }}">
                    <button type="button" class="btn btn-pink">Login</button>
                  </a>
                </div>
              </li>
              <li>
                <div class="btn-group-2">
                  <a href="{{ url('register') }}">
                    <button type="button" class="btn btn-pink">Register</button>
                  </a>
                </div>
              </li>
            </li>
        @else
            <li>
              <div class="btn-group-2">
                <a href="{{ url('logout')}}">
                  <button type="button" class="btn btn-pink">Logout</button>
                </a>
              </div>
            </li>
        @endif
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