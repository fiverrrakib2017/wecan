@extends('layouts.frontend.master')
@section('title', 'Features')
@section('content')
<main class="container">
    <section class="features-wrapper">
        <div class="section-heading">
            <h1 class="title">Features</h1>
            <p class="sub-heading">Tons of free tools, features, and services to set you up for success</p>
        </div>
        <div class="wrapper">
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/cod-management.svg') }}"
                        alt="cod management feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Seamless COD Management</h2>
                    <p class="description">
                        Manage your Cash on Delivery orders in one place, from leads management to order confirmation and shipping.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/google-sheet.svg')}}"
                        alt="Google Sheet Integration Feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Google Sheet Integration</h2>
                    <p class="description">
                        Scale and speed up your business operations by leveraging the power of our seamless Google Sheet integration
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/multi-currency.svg')}}"
                        alt="multi currency feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Multi Currency Converter</h2>
                    <p class="description">
                        Offer a customized experience to your customers. Your store currency will be automatically converted based on your customers location.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/multiple-stripe.svg')}}"
                        alt="customize your checkout feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Express checkout form</h2>
                    <p class="description">
                        Allow your visitor to order the product on the same page. Less steps, more conversion!
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/customize-checkout.svg')}}"
                        alt="customize your checkout feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Customize your checkout</h2>
                    <p class="description">
                        Make it easier for your customers to complete the checkout. Customize the fields and request only the necessary information.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/one-click-upsell.svg')}}"
                        alt="one click upSell feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">One Click UpSell</h2>
                    <p class="description">
                        Increase your sales effortlessly with our upsell feature that shows your customers attractive offers right after they purchase.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/seo-support.svg')}}"
                        alt="Seo Support Feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Support SEO</h2>
                    <p class="description">
                        Rank your product pages higher in search results. Get free access to the tools you need to increase organic traffic to your store.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/pixels-integration.svg')}}"
                        alt="pixel integration feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Pixels Integration</h2>
                    <p class="description">
                        Drive quality leads to your store thanks to our easy-to-setup pixel integration of most advertising platforms.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/product-reviews.svg')}}"
                        alt="product reviews feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Products Reviews</h2>
                    <p class="description">
                        Increase your store's conversion by up to 50% by adding real reviews from your happy past customers.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/abandoned-cart.svg')}}"
                        alt="abandoned cart feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Abandoned Carts</h2>
                    <p class="description">
                        Give your abandoned cart customers the push they need to complete their purchase with our free email targeting feature.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/skip-cart.svg')}}"
                        alt="skip cart feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Skip Cart</h2>
                    <p class="description">
                        Reduce friction for your customers. Direct them directly from your product page to the checkout page.
                    </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image">
                    <img src="{{ asset('frontend/images/multiple-stripe.svg')}}"
                        alt="multiple-stripe feature" />
                </div>
                <div class="feature-content">
                    <h2 class="title">Multiple Stripe Accounts Support</h2>
                    <p class="description">
                        You can connect your store with more than one Stripe account. This way you keep your business safe and secure.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
