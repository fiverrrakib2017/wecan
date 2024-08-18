<!-- Sidebar Menu Start -->
<aside class="app-sidemenu">
    <nav class="top-menu">
        <ul>
            <li class="store-front">
                <div class="sidemenu-toggle">
                    <!-- <i class="youcan-icon fas fa-sliders-h"></i> -->
                    <i class="youcan-icon fas fa-bars"></i>
                </div>
                <div style="display: flex; align-items: center;">
                    <a href="" target="blank">
                        <span class="side-menu-name">
                            <span>We Can</span>
                        </span>
                    </a>
                </div>
            </li>
            <li class="dashboard active">
                <a class="current-menu-item" href="{{ route('home') }}">
                    <i class="youcan-icon fas fa-tv"></i>
                    <span class="side-menu-name">Dashboard</span>
                </a>
            </li>
            <li id="orders-submenu-container" class="orders has-children  ">
                <span class="sub-menu-toggle" data-target="orders-submenu-container">
                    <i class="youcan-icon fas fa-cube"></i>
                    <span class="side-menu-name">Orders</span>
                </span>
                <ul class="sub-menu">
                    <li>
                        <a href="">All Orders</a>
                    </li>
                    <li>
                        <a href="">New Order</a>
                    </li>
                    <li>
                        <a href="">Abandoned Carts</a>
                    </li>
                </ul>
            </li>
            <li id="products-submenu-container" class="products has-children">
                <span class="sub-menu-toggle" data-target="products-submenu-container">
                    <i class="youcan-icon fas fa-tags"></i>
                    <span class="side-menu-name">Products</span>
                </span>
                <ul class="sub-menu">
                    <li>
                        <a href="">All Products</a>
                    </li>
                    <li>
                        <a href="{{ route('new.products') }}">New Product</a>
                    </li>
                    <li>
                        <a href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li>
                        <a href="{{ route('reviews') }}">Reviews</a>
                    </li>
                    <li>
                        <a href="">Inventory</a>
                    </li>
                </ul>
            </li>
            <li id="up-sells-submenu-container" class="upsell has-children ">
                <span class="sub-menu-toggle" data-target="up-sells-submenu-container">
                    <i class="youcan-icon fas fa-caret-square-up"></i>
                    <span class="side-menu-name">Up Sells</span>
                </span>
                <ul class="sub-menu">
                    <li>
                        <a href="">All Up Sells</a>
                    </li>
                    <li>
                        <a href="">New Up Sell</a>
                    </li>
                </ul>
            </li>
            <li id="coupon-submenu-container" class="coupons has-children ">
                <span class="sub-menu-toggle" data-target="coupon-submenu-container">
                    <i class="youcan-icon fas fa-clipboard-check"></i>
                    <span class="side-menu-name">Coupons</span>
                </span>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('coupon') }}">All Coupons</a>
                    </li>
                    <li>
                        <a href="{{ route('new.coupon') }}">New Coupon</a>
                    </li>
                </ul>
            </li>
            <li id="customers-submenu-container" class="customers has-children ">
                <span class="sub-menu-toggle" data-target="customers-submenu-container">
                    <i class="youcan-icon fas fa-users"></i>
                    <span class="side-menu-name">Customers</span>
                </span>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('customers') }}">All Customers</a>
                    </li>
                    <li>
                        <a href="{{ route('new.customers') }}">New Customer</a>
                    </li>
                </ul>
            </li>
            <li id="store-submenu-container" class="online has-children">
                <span class="sub-menu-toggle" data-target="store-submenu-container">
                    <i class="youcan-icon fas fa-store"></i>
                    <span class="side-menu-name">Store</span>
                </span>
                <ul class="sub-menu">
                    <li><a class="" href="{{ route('theme.setting') }}">Theme</a></li>
                    {{-- <li class="themes-beta-item">
                        <a class="" href="">Themes
                            <span class="badge">
                                New
                            </span>
                        </a>
                    </li> --}}
                    <li><a class="" href="">Menus</a></li>
                    <li><a class="" href="">Languages</a></li>
                    <li><a class="" href="">Pages</a></li>
                    <li><a class="" href="">Domains</a></li>
                </ul>
            </li>
            <li class="dashboard ">
                <a class="" href="">
                    <i class="youcan-icon fas fa-chart-pie"></i>
                    <span class="side-menu-name">Insights</span>
                </a>
            </li>
            <li class="invoices">
                <a href="">
                    <i class="youcan-icon fas fa-file-invoice-dollar"></i>
                    <span class="side-menu-name">Invoices</span>
                </a>
            </li>
            <li class="apps ">
                <a href="">
                    <i class="youcan-icon fab fa-google-play"></i>
                    <span class="side-menu-name">Apps</span>
                </a>
            </li>
        </ul>
    </nav>
    <nav class="bottom-menu">
        <ul>
            <li class="affiliate ">
                <a href="">
                    <i class="youcan-icon fas fa-share-alt"></i>
                    <span class="side-menu-name">Affiliate</span>
                </a>
            </li>
            <li class="support ">
                <a href="{{ route('new.tickets') }}">
                    <i class="youcan-icon fas fa-headset"></i>
                    <span class="side-menu-name">Support</span>
                </a>
            </li>
            <li class="settings ">
                <a href="">
                    <i class="youcan-icon fas fa-cog"></i>
                    <span class="side-menu-name">Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
