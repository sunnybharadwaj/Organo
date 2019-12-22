<nav id="admin-nav" class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a href="/">
            <figure class="flex logo-container">
                <div id="admin-logo" class="mr-4 p-4">
                    <img src='/static/organo_logo.png' class="logo" alt="">
                </div>

            </figure>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
           data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            @auth

                <a href="/admin" class="navbar-item">
                    Dashboard
                </a>
            @endauth

            <a href="/" class="navbar-item">
                Go to Website
            </a>


        </div>

        <div class="navbar-end">
            @auth
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Manage
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/admin/gallery">Gallery</a>
                        <a class="navbar-item" href="/admin/team">Team</a>
                        <a class="navbar-item" href="/admin/press">Press</a>
                        <a class="navbar-item" href="/admin/blog">Blog</a>
                        <a class="navbar-item" href="/admin/forms">Forms</a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                            Report an issue
                        </a>
                    </div>
                </div>
            @endauth


            <div class="navbar-item">
                <div class="buttons">
                    @auth
                        <a class="button is-light" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                    @endauth

                    @guest

                        <a class="button is-warning" href="{{ route('login') }}">{{ __('Login') }}</a>

                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>

