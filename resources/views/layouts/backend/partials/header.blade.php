<!-- Header Area Start -->
<header class="app-header">
    <div class="left-side">
        <div class="amount">
            <span class="title">Balance</span>
            <span class="total balance">
                <span class="currency">$</span>
                <span class="value">0.00</span>
            </span>
        </div>
        <div class="separator"></div>
        <div class="amount">
            <span class="title">Due amount</span>
            <span class="total due-amount">
                <span class="currency">$</span>
                <span class="value">0.00</span>
            </span>
        </div>
    </div>
    <div class="right-side full-width">
        <div class="header-element">
            <div class="languages-block">
                <div>
                    <button class="button"><a target="_blank" href="{{ route('store.website', ['storeid' => Auth::user()->store_id]) }}">
                        Your Site</a></button>
                </div>
            </div>
        </div>
        <div class="header-element">
            <div class="languages-block">
                <div id="languages-block-toggle" class="languages-toggle">
                    <div class="lang-svg en-svg" title="English">EN</div>
                </div>
                <ul id="languages-block-drodpown" class="languages-drodpown">
                    <li class="active">
                        <button type="submit">
                            <div class="lang-svg en-svg">EN</div>
                            <span>English</span>
                        </button>
                    </li>
                    <li class="">
                        <button type="submit">
                            <div class="lang-svg fr-svg">FR</div>
                            <span>Français</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-element">
            <a href="" class="button-v2 secondary-button notifications-block">
                <span class="count">
                    0
                </span>
                <i class="youcan-icon far fa-bell"></i>
            </a>
        </div>
        <div class="header-element">
            <div class="user-block dropdown">
                <button type="button" id="user-block-toggle" class="button-v2 secondary-button dropdown-toggle">
                    <i class="far fa-user"></i>
                </button>
                <div id="user-block-content" class="dropdown-content">
                    <div class="dropdown-header">
                        <span class="seller-name">
                            @php
                            $user = App\Models\User::find(Auth::id());
                            $userName = $user->first_name.' '.$user->last_name;
                            @endphp
                            <span><?= $userName ?></span>
                        </span>
                        <h6 class="store-name">Your store: <a href="" target="_blank">We Can</a></h6>
                    </div>
                    <div class="dropdown-body">
                        <ul class="dropdown-list">
                            <li class="with-icon">
                                <a href="" target="_blank">
                                    <i class="youcan-icon fas fa-id-badge"></i>
                                    <span>Manage account</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="dropdown-list">
                            <li class="with-icon">
                                <a href="" target="_blank">
                                    <i class="youcan-icon fas fa-store"></i>
                                    <span>Create new store</span>
                                </a>
                            </li>
                            <li class="with-icon">
                                <a href="">
                                    <i class="youcan-icon fas fa-arrows-alt-h"></i>
                                    <span>Switch Store</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="dropdown-list">
                            <li class="with-icon">
                                <a href="" target="_blank">
                                    <i class="youcan-icon fab fa-shopify"></i>
                                    <span>Your store</span>
                                </a>
                            </li>
                            <li class="with-icon">
                                <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                <i class="youcan-icon fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                {{-- <button type="submit" class="logout">
                                    <i class="youcan-icon fas fa-sign-out-alt"></i>
                                    <span>Log out</span>
                                </button> --}}
                            </li>
                        </ul>
                        <ul class="dropdown-list">
                            {{-- <li>
                                <a href="{{ route('help') }}" target="_blank">Wecan Help</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('faq') }}" target="_blank">Wecan FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
