

<div id="header-wrapper" class="header-wrapper">
    <div class="notice-bar desktop-notice-bar" style="color: #ffffff; background-color: #803160;">
        <div class="container">
            <div class="fr-view">
                <p><strong>Special offer: free shipping, cash on delivery, faster and you can order now!</p>
            </div>
        </div>
    </div>
    <div class="notice-bar mobile-notice-bar" style="color: #ffffff; background-color: #803160;">
        <div class="container">
            <div class="fr-view">
                <p><strong>Special offer: free shipping, cash on delivery, faster and you can order now!</p>
                <p><strong>Hurry up and order now!</strong></p>
            </div>
        </div>
    </div>
    <div class="header-container">
        <header class="app-header" :class="{'search-active': showSearch, 'navigation-active': showNavigation}"
            id="app-header">
            <div class="main-bar desktop-bar" style="background-color: #ffffff;border-bottom: 1px solid #f0f0f0;">
                <div class="container">
                    <div class="header-center">
                        <div class="header-element">
                            <ul class="list-unstyled header-list">
                                <li>
                                    <a href="/" style="color:#000000">
                                        Welcome
                                    </a>
                                </li>
                                <li>
                                    <a href="/" style="color:#000000">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a style="color:#000000">Collections</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-left">
                        <div class="header-element">
                            <a class="header-brand" href=""></a>
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="header-element">
                            <a class="header-switcher">
                                <i class="yc yc-search" style="color:#000000"></i>
                            </a>
                        </div>
                        <div class="header-element">
                        </div>
                        <div class="header-element">
                            <cart-dropdown color="#000000"></cart-dropdown>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mobile Nav --}}
            <div class="main-bar mobile-bar" style="background-color: #ffffff;border-bottom: 1px solid #f0f0f0;">
                <div class="container">
                    <div class="header-left">
                        <div class="header-element">
                            <a class="header-switcher">
                                <i class="yc yc-menu" style="color:#000000"></i>
                            </a>
                        </div>
                        <div class="header-element">
                            <a class="header-brand" href="">
                            </a>
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="header-element">
                            <a class="header-switcher">
                                <i class="yc yc-search" style="color:#000000"></i>
                            </a>
                        </div>
                        <div class="header-element">
                        </div>
                        <div class="header-element">
                            <cart-dropdown color="#000000"></cart-dropdown>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
