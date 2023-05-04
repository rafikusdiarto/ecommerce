@extends('user.layouts.app')

@section('content')
<div class="banner-area style-two pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-banner nth-child-2 mb-lm-30px">
                    <img src="{{asset('users/assets/images/banner/6.webp')}}" alt="">
                    <div class="banner-content nth-child-3">
                        <h3 class="title">Speaker</h3>
                        <span class="category">From $69.00</span>
                        <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner nth-child-2">
                    <img src="{{asset('users/assets/images/banner/7.webp')}}" alt="">
                    <div class="banner-content nth-child-2">
                        <h3 class="title">Smartphone</h3>
                        <span class="category">From $95.00</span>
                        <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner nth-child-2">
                    <img src="{{asset('users/assets/images/banner/7.webp')}}" alt="">
                    <div class="banner-content nth-child-2">
                        <h3 class="title">Smartphone</h3>
                        <span class="category">From $95.00</span>
                        <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Product Area Start -->
<div class="product-area pb-100px">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title">New Products</h2>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <!-- Section Title & Tab End -->
        <div class="row">
            <div class="col">
                <div class="row mb-n-30px">
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="new">New</span>
                            </span>
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/1.webp" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">

                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                    </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="sale">-10%</span>
                            <span class="new">New</span>
                            </span>
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/2.webp" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/2.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="old">$48.50</span>
                                <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">

                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                    </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="new">Sale</span>
                            </span>
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/3.webp" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="single-product.html">Smart Music Box
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">

                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                    </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="new">New</span>
                            </span>
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/4.webp" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">

                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                    </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                            </span>
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/5.webp" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/5.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">

                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                    </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="sale">-8%</span>
                            <span class="new">Sale</span>
                            </span>
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/6.webp" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/6.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="single-product.html">Smart Table Camera
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="old">$138.50</span>
                                <span class="new">$112.50</span>
                                </span>
                            </div>
                            <div class="actions">

                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                    </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="new">Sale</span>
                            </span>
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/7.webp" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="single-product.html">Round Pocket Router
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                            <div class="actions">

                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                    </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                        <!-- Single Prodect -->
                        <div class="product">
                            <span class="badges">
                                <span class="sale">-5%</span>
                            </span>
                            <div class="thumb">
                                <a href="single-product.html" class="image">
                                    <img src="assets/images/product-image/8.webp" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/8.webp" alt="Product" />
                                </a>
                            </div>
                            <div class="content">
                                <span class="category"><a href="#">Accessories</a></span>
                                <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                    </a>
                                </h5>
                                <span class="price">
                                    <span class="old">$260.00</span>
                                <span class="new">$238.50</span>
                                </span>
                            </div>
                            <div class="actions">

                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
