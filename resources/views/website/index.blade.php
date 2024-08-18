@extends('layouts.website')
@section('title', 'New Store')
<style>
    /* #product-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    } */

    .button.secondary-button:hover {
        color: black;
        border: 1px solid green;
    }
</style>
@section('content')
<main class="page-wrapper">
    <div id="section-3UIEW0oAUnwEKM6M" class="slider-container show-first-image horizontal medium">
        <div class="slider">
            <div class="slide ">
                <img class="mobile-image "
                    src="https://cdn.youcan.shop/stores/c21f969b5f03d33d43e04f8f136e7682/others/exJIj1WB1xXKzBHfeLblKpBDpOJccRStFXLEi0d3.png"
                    alt="slider-image" />
                <img class="desktop-image "
                    src="https://cdn.youcan.shop/stores/c21f969b5f03d33d43e04f8f136e7682/others/exJIj1WB1xXKzBHfeLblKpBDpOJccRStFXLEi0d3.png"
                    alt="slider-image" />
                <span class="slider-caption">
                </span>

            </div>
            <div class="slide ">
                <img class="mobile-image "
                    src="https://cdn.youcan.shop/stores/c21f969b5f03d33d43e04f8f136e7682/others/fPFsET2AgQI7TVZIlgRlv5MizZyNlsn2PkNVK2WB.png"
                    alt="slider-image" />
                <img class="desktop-image "
                    src="https://cdn.youcan.shop/stores/c21f969b5f03d33d43e04f8f136e7682/others/fPFsET2AgQI7TVZIlgRlv5MizZyNlsn2PkNVK2WB.png"
                    alt="slider-image" />
                <span class="slider-caption">
                </span>

            </div>
        </div>
    </div>


    <section class="section products-list-section section-bCiXTyB9F1N39CD1">
        <div class="container">
            <div class="app-heading">
                <h3 class="heading-primary">Incredible discounts</h3>
                <p class="heading-description">Quality products</p>
            </div>
            <div class="products-grid">
                @foreach ($products as $product)

                <div class="product-item">
                    <a class="product-thumbnail" href="">
                        <img id="product-image" src="{{ asset('collections') }}/{{ $product->product_image }}" alt=""
                            class="">
                    </a>
                    <div class="product-details">
                        <div class="product-info">
                            <h3 class="product-title">
                                <a href="">{{ $product->product_name }}</a>
                            </h3>
                            <div class="product-price">
                                <span class="currency-value after">
                                    <span class="value">USD</span><span class="currency">&nbsp; {{
                                        $product->product_price }}</span>
                                </span>
                            </div>
                        </div>
                        <div class="product-actions">
                            <a class="button small-button secondary-button" href="">Buy it now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="load-more">
                <a class="button default-button" href="">
                    Load more
                </a>
            </div>
        </div>
    </section>


    {{-- <section class="section products-list-section section-fHfUG6lBavA6YPhH">
        <div class="container">
            <div class="app-heading">
                <h3 class="heading-primary">test</h3>
                <p class="heading-description">tes</p>
            </div>
            <div class="products-slider">
                <div class="product-item">
                    <a class="product-thumbnail lazy" href="https://capmind3.youcan.store/products/product-5">
                        <img data-src="https://cdn.youcan.shop/stores/c21f969b5f03d33d43e04f8f136e7682/products/WzwMvHplS7hDtJjDxRkZ0kseC9BnRAaQYFUWy5Og_md.png"
                            alt="" class="">
                    </a>
                    <div class="product-details">
                        <div class="product-info">
                            <h3 class="product-title">
                                <a href="https://capmind3.youcan.store/products/product-5">Cinquième produit</a>
                            </h3>
                            <div class="product-price">
                                <span class="currency-value after">
                                    <span class="value">300</span><span class="currency">&nbsp;د.م</span>
                                </span>
                            </div>
                        </div>
                        <div class="product-actions">
                            <a class="button small-button secondary-button"
                                href="https://capmind3.youcan.store/products/product-5">
                                Buy it now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <a class="product-thumbnail lazy" href="https://capmind3.youcan.store/products/product-3">
                        <img data-src="https://cdn.youcan.shop/stores/c21f969b5f03d33d43e04f8f136e7682/products/sNxd8M0TbbHJ3u0tuQqeZmuqtIiIHNd5nMW2Ez60_md.png"
                            alt="" class="">
                    </a>
                    <div class="product-details">
                        <div class="product-info">
                            <h3 class="product-title">
                                <a href="https://capmind3.youcan.store/products/product-3">Troisième produit</a>
                            </h3>
                            <div class="product-price">
                                <span class="currency-value before">
                                    <span class="value">60</span><span class="currency">&nbsp;د.م</span>
                                </span>
                                <span class="currency-value after">
                                    <span class="value">40</span><span class="currency">&nbsp;د.م</span>
                                </span>
                            </div>
                        </div>
                        <div class="product-actions">
                            <a class="button small-button secondary-button"
                                href="https://capmind3.youcan.store/products/product-3">
                                Buy it now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <a class="product-thumbnail lazy" href="https://capmind3.youcan.store/products/product-2">
                        <img data-src="https://cdn.youcan.shop/stores/c21f969b5f03d33d43e04f8f136e7682/products/QEnB4R9jIbsLEBrTd83nHIxLhnzsqCtmPEtLt5zl_md.png"
                            alt="" class="">
                    </a>
                    <div class="product-details">
                        <div class="product-info">
                            <h3 class="product-title">
                                <a href="https://capmind3.youcan.store/products/product-2">Deuxième produit</a>
                            </h3>
                            <div class="product-price">
                                <span class="currency-value before">
                                    <span class="value">250</span><span class="currency">&nbsp;د.م</span>
                                </span>
                                <span class="currency-value after">
                                    <span class="value">200</span><span class="currency">&nbsp;د.م</span>
                                </span>
                            </div>
                        </div>
                        <div class="product-actions">
                            <a class="button small-button secondary-button"
                                href="https://capmind3.youcan.store/products/product-2">
                                Buy it now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <a class="product-thumbnail lazy" href="https://capmind3.youcan.store/products/product-4">
                        <img data-src="https://cdn.youcan.shop/stores/c21f969b5f03d33d43e04f8f136e7682/products/70sdy2kUDk8QZ9lUCVJEaQfIT3yrG9F6vdP9xiqe_md.png"
                            alt="" class="">
                    </a>
                    <div class="product-details">
                        <div class="product-info">
                            <h3 class="product-title">
                                <a href="https://capmind3.youcan.store/products/product-4">Quatrième produit</a>
                            </h3>
                            <div class="product-price">
                                <span class="currency-value before">
                                    <span class="value">250</span><span class="currency">&nbsp;د.م</span>
                                </span>
                                <span class="currency-value after">
                                    <span class="value">200</span><span class="currency">&nbsp;د.م</span>
                                </span>
                            </div>
                        </div>
                        <div class="product-actions">
                            <a class="button small-button secondary-button"
                                href="https://capmind3.youcan.store/products/product-4">
                                Buy it now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <a class="product-thumbnail lazy" href="https://capmind3.youcan.store/products/product-1">
                        <img data-src="https://cdn.youcan.shop/stores/c21f969b5f03d33d43e04f8f136e7682/products/Q7ZgTSQbs3gJl5ARAUkBDEs9OpEe2Mq47AR6tiJf_md.png"
                            alt="" class="">
                    </a>
                    <div class="product-details">
                        <div class="product-info">
                            <h3 class="product-title">
                                <a href="https://capmind3.youcan.store/products/product-1">Premier produit</a>
                            </h3>
                            <div class="product-price">
                                <span class="currency-value before">
                                    <span class="value">15</span><span class="currency">&nbsp;د.م</span>
                                </span>
                                <span class="currency-value after">
                                    <span class="value">10</span><span class="currency">&nbsp;د.م</span>
                                </span>
                            </div>
                        </div>
                        <div class="product-actions">
                            <a class="button small-button secondary-button"
                                href="https://capmind3.youcan.store/products/product-1">
                                Buy it now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</main>
</div>
@endsection
