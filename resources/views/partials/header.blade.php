<nav>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" style="height: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('characters') ? 'active' : '' }}" href="#">CHARACTERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('comics') ? 'active' : '' }}" href="{{ route('comics') }}">COMICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('movies') ? 'active' : '' }}" href="#">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tv') ? 'active' : '' }}" href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('games') ? 'active' : '' }}" href="#">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('collectibles') ? 'active' : '' }}" href="#">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('videos') ? 'active' : '' }}" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('fan') ? 'active' : '' }}" href="#">FAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('news') ? 'active' : '' }}" href="#">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('shop') ? 'active' : '' }}" href="#">SHOP</a>
                    </li>
                </ul>
                <style>
                    .nav-link.active {
                        border-bottom: 3px solid #007bff; /* Replace #007bff with the color of your logo */
                    }
                </style>
                </ul>
            </div>
        </div>
    </div>
</nav>
