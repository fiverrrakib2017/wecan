<nav class="navbar">
    <div class="navbar_fixed">
        <div class="left-menu">
            <!-- <a href="/" class="logo">
                <img src="https://static-portal.youcan.shop/images/home_page_images_v2/logo.svg" alt="logo" />
            </a> -->
            <div class="responsive">
                <ul class="left-list">
                    <li>
                        <a href="{{ route('feature') }}" id="header-features" class="nav-link">Features</a>
                    </li>
                    <li>
                        <a href="{{ route('pricing') }}" id="header-pricing" class="nav-link">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right-menu">
            <div class="responsive">
                <ul class="right-list">
                    <li>
                        <a href="{{ route('register') }}" id="header-signup" class="button primary">Sign Up</a>
                    </li>
                    <li>
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ route('home') }}" class="button secondary">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="button secondary">Login</a>
                        @endauth
                        @endif
                    </li>
                    <li>
                        <div class="language-menu">
                            <button class="dropdown-toggle" type="button" id="lang-button">
                                <span>
                                    English
                                </span>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" id="lang-menu">
                                <li class="dropdown-item">
                                    <a href="" class="active">
                                        <span>
                                            English
                                        </span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="" class="">
                                        <span>
                                            Français
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <button class="hamburger" id="bars">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </div>
</nav>
