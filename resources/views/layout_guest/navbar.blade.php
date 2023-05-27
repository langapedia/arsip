<nav class="navbar navbar-expand-lg " id="navbar">
    <a class="navbar-brand" style="color:white;" href="{{ route('home') }}">
        <img src="assets/img/bwi.PNG" alt="Logo" width="50" height="70">
        DESA LABANASEM
    </a>

    @auth
    <a class="navbar-brand" style="color:white;" href="{{ route('logout') }}">
        Logout
    </a>
    <a class="navbar-brand" style="color:white;" href="{{ route('fitur') }}">
        Menu Admin
    </a>
    @endauth
    @guest
    <a class="navbar-brand position-absolute end-0" style="color:white;" href="{{ route('login') }}">
        Login
    </a>
    @endguest

    <div class="container-fluid">



    </div>
</nav>