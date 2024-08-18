@extends('layouts.frontend.master')
@section('title', 'Features')
@section('content')
<main class="container">
    <section class="pricing-section">
        <div class="section-heading">
            <h1 class="title">The Rates</h1>
            <p class="sub-heading">YouCan offers competitive rates to entrepreneurs in the MEA region with two optimal pricing models:</p>
        </div>
        <div class="wrapper">
            <div class="buttonWrapper">
                <button class="tab-button active" data-id="subscription">Subscription based</button>
                <button class="tab-button" data-id="commission">Based on your sales</button>
            </div>
            <div class="contentWrapper">
                <div class="content active" id="subscription">
                    <div class="subsciption-based">
                        <div class="pricing-plan">
                            <div class="plans">
                                <h2 class="title">Solopreneur</h2>
                                <p class="price">$ <span class="number">27</span> Per month</p>
                                <div class="border"></div>
                                <h3 class="features-included">You benefit from</h3>
                                <ul>
                                    <li class="item">
                                        <img src="https://static-portal.youcan.shop/images/home_page_images_v2/marks.svg"
                                            alt="included benefits" />
                                        <span>Up to 50K monthly sales</span>
                                    </li>
                                    <li class="item">
                                        <img src="https://static-portal.youcan.shop/images/home_page_images_v2/marks.svg"
                                            alt="included benefits" />
                                        <span>1 user</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="https://seller-area.youcan.shop/admin/register/?lang=fr" class="plan-btn">Choose this subscription</a>
                        </div>
                        <div class="pricing-plan">
                            <div class="plans">
                                <h2 class="title">Starter</h2>
                                <p class="price">$ <span class="number">47</span> Per month</p>
                                <div class="border"></div>
                                <h3 class="features-included">You benefit from</h3>
                                <ul>
                                    <li class="item">
                                        <img src="https://static-portal.youcan.shop/images/home_page_images_v2/marks.svg"
                                            alt="included benefits" />
                                        <span>Up to 100K monthly sales</span>
                                    </li>
                                    <li class="item">
                                        <img src="https://static-portal.youcan.shop/images/home_page_images_v2/marks.svg"
                                            alt="included benefits" />
                                        <span>3 users</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="https://seller-area.youcan.shop/admin/register/?lang=fr" class="plan-btn">Choose this subscription</a>
                        </div>
                        <div class="pricing-plan">
                            <div class="plans">
                                <h2 class="title">Entrepreneur</h2>
                                <p class="price">$ <span class="number">87</span> Per month</p>
                                <div class="border"></div>
                                <h3 class="features-included">You benefit from</h3>
                                <ul>
                                    <li class="item">
                                        <img src="https://static-portal.youcan.shop/images/home_page_images_v2/marks.svg"
                                            alt="included benefits" />
                                        <span>Up to 300K monthly sales</span>
                                    </li>
                                    <li class="item">
                                        <img src="https://static-portal.youcan.shop/images/home_page_images_v2/marks.svg"
                                            alt="included benefits" />
                                        <span>6 users</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="https://seller-area.youcan.shop/admin/register/?lang=fr" class="plan-btn">Choose this subscription</a>
                        </div>
                        <div class="pricing-plan">
                            <div class="plans">
                                <h2 class="title">Small Medium Enterprise</h2>
                                <p class="price">$ <span class="number">187</span> Per month</p>
                                <div class="border"></div>
                                <h3 class="features-included">You benefit from</h3>
                                <ul>
                                    <li class="item">
                                        <img src="https://static-portal.youcan.shop/images/home_page_images_v2/marks.svg"
                                            alt="included benefits" />
                                        <span>Up to 1M monthly sales</span>
                                    </li>
                                    <li class="item">
                                        <img src="https://static-portal.youcan.shop/images/home_page_images_v2/marks.svg"
                                            alt="included benefits" />
                                        <span>19 users</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="https://seller-area.youcan.shop/admin/register/?lang=fr" class="plan-btn">Choose this subscription</a>
                        </div>
                    </div>
                </div>
                <div class="content" id="commission">
                    <section class="statement first-statement">
                        <h2 class="title">Cash on delivery</h2>
                        <div class="diagram">
                            <div class="striped">
                                <div class="striped-background"></div>
                                <span class="number">0%</span>
                                <span class="text">No payment until you reach $10,000 in sales</span>
                                <div class="tooltip pink">
                                    <span class="chevron">$10K</span>
                                </div>
                            </div>
                            <div class="dark-gray">
                                <span class="number">0.25%</span>
                                <span class="text">Between $10,000 and $250,000</span>
                                <div class="tooltip black">
                                    <span class="chevron">$250K</span>
                                </div>
                            </div>
                            <div class="light-gray">
                                <a href="https://youcan.shop/fr/contact-us" class="link">Contact us</a>
                            </div>
                        </div>
                        <span class="sales-lvl">Sales level</span>
                    </section>
                    <section class="statement second-statement">
                        <h2 class="title">Les paiements en ligne</h2>
                        <div class="diagram">
                            <div class="striped">
                                <div class="striped-background"></div>
                                <span class="number">0%</span>
                                <span class="text">No payment until you reach $10,000 in sales</span>
                                <div class="tooltip pink">
                                    <span class="chevron">$10K</span>
                                </div>
                            </div>
                            <div class="dark-gray">
                                <span class="number">0.5% </span>
                                <span class="text">Between $10,000 and $250,000</span>
                                <div class="tooltip black">
                                    <span class="chevron">$250K</span>
                                </div>
                            </div>
                            <div class="light-gray">
                                <a href="https://youcan.shop/fr/contact-us" class="link">Contact us</a>
                            </div>
                        </div>
                        <span class="sales-lvl">Sales level</span>
                    </section>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection
