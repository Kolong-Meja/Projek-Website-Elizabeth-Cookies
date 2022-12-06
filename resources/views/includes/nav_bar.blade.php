<!-- navigation bar template -->
<nav class="navbar navbar-expand-sm bg-black">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="" href="{{ route('home.index') }}">
            <img class="img-fluid" src="image/Logo.png" alt="Logo" width="63" height="54">
        </a>
        <a class="Fontlogo" href="{{ route('product.index') }}">Elisabeth Cookies</a>
      <li class="Nav-edit">
        @if (Auth::guest())
            <li>
              <li>
                <div class="btn-group-2">
                  <a href="{{ route('login') }}">
                    <button type="button" class="btn btn-pink">Login</button>
                  </a>
                </div>
              </li>
              <li>
                <div class="btn-group-2">
                  <a href="{{ route('register') }}">
                    <button type="button" class="btn btn-pink">Register</button>
                  </a>
                </div>
              </li>
            </li>
        @else
            <li>
              <div class="btn-group-2">
                <a href="{{ route('logout')}}">
                  <button type="button" class="btn btn-pink">Logout</button>
                </a>
              </div>
            </li>
            <li>
              <div class="btn-group-2">
                <a href="{{ route('profile.edit')}}">
                  <button type="button" class="btn btn-pink">Profile</button>
                </a>
                <p id="tag-name">Selamat Datang <a class="profile-link" href={{ route('profile.edit') }}>{{ Auth::user()->name}}</a></p>
              </div>
            </li>
        @endif
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="Nav-edit">
        <div class="btn-group">
          <a href="{{ route('home.index') }}"> <button type="button" class="btn btn-pink">Home</button></a>
          <a href="{{ route('product.index') }}"> <button type="button" class="btn btn-pink">Product</button></a>
          <a href="{{ route('contact.index')}}"> <button type="button" class="btn btn-pink">Contact</button></a>
          <a href="{{ route('about.index') }}"> <button type="button" class="btn btn-pink">About</button></a>
        </div>
      </li>
    </ul>
</nav>