@extends('layouts.frontend.master')
@section('title', 'Setup Business')
@section('content')
<main>
    <div class="container">
        <section class="hero-section">
            <div class="section-heading">
                <h1 class="heading">Selling online has never been easier
                </h1>
                <p class="sub-heading">Start your online store in a few clicks and take advantage of our powerful
                    e-commerce tools to build a profitable business</p>
                <div class="marks">
                    <div class="mark">
                        <img src="{{ asset('frontend/images/marks.svg')}}" alt="Easy store setup" />
                        <p class="mark-text">Easy and intuitive store setup</p>
                    </div>
                    <div class="mark">
                        <img src="{{ asset('frontend/images/marks.svg')}}" alt="No charge" />
                        <p class="mark-text"> No charge until you succeed</p>
                    </div>
                    <div class="mark">
                        <img src="{{ asset('frontend/images/marks.svg')}}" alt="The only e-commerce platform " />
                        <p class="mark-text">All the e-commerce tools you need in one place</p>
                    </div>
                </div>
                <div class="description">
                    <a href="" id="hero-signup" class="button">Get Started</a>
                </div>
            </div>
            <div class="section-image">
                <div class="slideshow">
                    <img src="{{ asset('frontend/images/shop-global-1.webp')}}" class="slide" alt="hero image" />
                    <img src="{{ asset('frontend/images/shop-global-2.webp')}}" class="slide" alt="hero image" />
                </div>
                <div class="benifits">
                    <div class="benifit">
                        <p class="benifit-text">+150K</p>
                        <p class="benifit-detail">Active stores</p>
                    </div>
                    <div class="border-right"></div>
                    <div class="benifit">
                        <p class="benifit-text">+20</p>
                        <p class="benifit-detail">Served countries</p>
                    </div>
                    <div class="border-right"></div>
                    <div class="benifit">
                        <p class="benifit-text">+20%</p>
                        <p class="benifit-detail">Conversion rate</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="features-section">
            <div class="section-heading-features">
                <h2 class="title">How does it work?</h2>
            </div>
            <div class="features">
                <div class="feature">
                    <img src="{{ asset('frontend/images/feature-1.svg')}}" alt="setup store" />
                    <p class="feature-desc">1. Setup your store</p>
                </div>
                <div class="feature">
                    <img src="{{ asset('frontend/images/feature-2.svg')}}" alt="list products" />
                    <p class="feature-desc">2. List your products</p>
                </div>
                <div class="feature">
                    <img src="{{ asset('frontend/images/feature-3.svg')}}" alt="Traffic" />
                    <p class="feature-desc">3. Drive traffic and sales</p>
                </div>
                <div class="feature">
                    <img src="{{ asset('frontend/images/feature-4.svg')}}" alt="get paid" />
                    <p class="feature-desc">4. Get paid</p>
                </div>
            </div>
        </section>
    </div>
    <section class="inner-section">
        <div class="container">
            <h3 class="mobile-inner-title">Easy and intuitive store setup</h3>
            <div class="inner">
                <div class="inner-img">
                    <img src="{{ asset('frontend/images/setup-store-animation.gif')}}" alt="product" />
                </div>
                <div class="inner-desc">
                    <h3 class="inner-title">Easy and intuitive store setup</h3>
                    <p class="inner-text">Save yourself hours of hassle with our well-optimized, highly convertible,
                        simple, and easy to setup store themes.</p>
                    <a href="" class="inner-link">Learn more</a>
                </div>
            </div>
        </div>
        <div class="bg-color">
            <div class="container">
                <div class="inner">
                    <div class="inner-desc">
                        <h3 class="inner-title">No charge until you succeed</h3>
                        <p class="inner-text">Enjoy all YouCan features and services without any limitations and
                            without having to pay until you reach $10,000 in sales.</p>
                        <a href="" id="learn-more-second" class="inner-link">Learn
                            more</a>
                    </div>
                    <div class="inner-img-box">
                        <div class="inner-border">
                            <div>
                                <span class="icon">🎉</span>
                                <p>You've just hit
                                    <span class="sales">$10k in sales</span>
                                </p>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="chart">
                                <img src="{{ asset('frontend/images/charts.png')}}" alt="chart" />
                            </div>
                        </div>
                        <img src="{{ asset('frontend/images/navigate-illustration-3.webp')}}" alt="scale" class="selfie-img" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner reverse inner-space">
                <div class="inner-img">
                    <img src="{{ asset('frontend/images/store-setup.png')}}" alt="infra" />
                </div>
                <div class="inner-desc">
                    <h3 class="inner-title">All the e-commerce tools you need in one place.</h3>
                    <p class="inner-text">Get all the design, fulfillment, payment, and analytics tools you need to
                        manage your business seamlessly</p>
                    <a href="" id="learn-more-third" class="inner-link">Learn
                        more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-accordination">
        <div class="container">
            <div class="faq-bg-color">
                <h3 class="title">Frequently asked questions</h3>
                <div class="border"></div>
                <div class="accordion-container">
                    <div class="accordion-item">
                        <div class="item-header">
                            <h4 class="item-question">
                                How can I change my store name and email?
                            </h4>
                            <div class="item-icon">
                                <img src="{{ asset('frontend/images/faq-arrow.svg')}}" alt="arrow down" class="arrow-down">
                            </div>
                        </div>
                        <div class="item-content">
                            <p class="item-answer">
                                To change your store name, you can do it manually from your store
                                <a href="" class="faq-link" target="_blank">settings</a>, for your store slug and your
                                store/seller email, please send an email to
                                <a href="" class="faq-link"><span>support@wecan.shop</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="item-header">
                            <h4 class="item-question">
                                Why should I buy credit to activate my store?
                            </h4>
                            <div class="item-icon">
                                <img src="{{ asset('frontend/images/faq-arrow.svg')}}" alt="arrow down" class="arrow-down">
                            </div>
                        </div>
                        <div class="item-content">
                            <p class="item-answer">
                                To avoid fake accounts and robots. The amount bought will be a deposit in your
                                balance that you can always use later.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="item-header">
                            <h4 class="item-question">
                                Is there a limit on the number of products I can add to my store?
                            </h4>
                            <div class="item-icon">
                                <img src="{{ asset('frontend/images/faq-arrow.svg')}}" alt="arrow down" class="arrow-down">
                            </div>
                        </div>
                        <div class="item-content">
                            <p class="item-answer">
                                You can add an unlimited number of products and receive an unlimited number of
                                qualified visitors excluding fake visitors. YouCan enables you to create, develop
                                and manage your store without limitations.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="item-header">
                            <h4 class="item-question">
                                Does YouCan take care of storage and shipping of my products?
                            </h4>
                            <div class="item-icon">
                                <img src="{{ asset('frontend/images/faq-arrow.svg')}}" alt="arrow down" class="arrow-down">
                            </div>
                        </div>
                        <div class="item-content">
                            <p class="item-answer">
                                We do not currently support storage and shipping, but we have an aggregator service
                                (YouCan Ship) that provides you with a list of local shipping companies and you can
                                choose from it.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="item-header">
                            <h4 class="item-question">
                                Can I use YouCan for dropshipping
                            </h4>
                            <div class="item-icon">
                                <img src="{{ asset('frontend/images/faq-arrow.svg')}}" alt="arrow down" class="arrow-down">
                            </div>
                        </div>
                        <div class="item-content">
                            <p class="item-answer">
                                Yes, YouCan can be used for dropshipping. All the tools you need to do so are
                                available to you. Please read our terms and conditions for cases where you are not
                                allowed to use dropshipping.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
