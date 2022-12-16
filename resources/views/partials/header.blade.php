<header>
    <!-- CONTAINER -->
    <div class="container">
        <!-- LOGO -->
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc Logo">
        </div>
        <!-- /LOGO -->

        <!-- NAVIGATION -->
        <nav class="nav-header">
            @foreach ($links as $link)
                <li class="me-2">
                    <a href="{{ $link['href'] }}">
                        {{ $link['name'] }}
                    </a>
                </li>
            @endforeach
        </nav>
        <!-- /NAVIGATION -->
    </div>
    <!-- /CONTAINER -->
</header>
