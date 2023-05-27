<nav class="navbar navbar-expand-lg" id="navbar" style="background-color: #1E5128;">
    <div class="container-fluid">
        <a class="navbar-brand" id="title" href="{{ Route('admin') }}">ARSIP DI GITAL</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbar">
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('fitur') }}">Menu Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('menu') }}">Menu Guest</a>
                </li>

                @auth
                <li class="nav-item position-absolute end-0">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>