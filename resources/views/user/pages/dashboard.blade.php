@extends('user.layouts.app')

@section('content')
    <div class="section ">
    @include('user.components.hero')
    </div>
    <div class="banner-area style-two pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="single-banner nth-child-2 mb-lm-30px p-5">
                        <img src="{{ asset('users/assets/images/category/laptop.jpg') }}" alt="">
                        <div class="banner-content nth-child-3">
                            {{-- <h5 class="title">Laptop</h5> --}}
                            {{-- <span class="category">{{$item->price}}</span> --}}
                            <a href="{{route('laptop.show')}}" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-banner nth-child-2 mb-lm-30px p-5">
                        <img src="{{ asset('users/assets/images/category/monitors.png') }}" alt="">
                        <div class="banner-content nth-child-3">
                            {{-- <h5 class="title">Display & Desktop</h5> --}}
                            {{-- <span class="category">{{$item->price}}</span> --}}
                            <a href="{{route('display.show')}}" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-banner nth-child-2 mb-lm-30px p-5">
                        <img src="{{ asset('users/assets/images/category/components.png') }}" alt="">
                        <div class="banner-content nth-child-3">
                            {{-- <h5 class="title">Components</h5> --}}
                            {{-- <span class="category">{{$item->price}}</span> --}}
                            <a href="{{route('components.show')}}" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></a>
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
                        @foreach ($getProduct as $item)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{$item->product_img}}" alt="Product" />
                                            <img class="hover-image" src="{{$item->product_img}}"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a
                                                href="#">{{ $item->product_category_name }}</a></span>
                                        <h5 class="title"><a href="single-product.html">{{ $item->product_name }}
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">@currency($item->price)</span>
                                        </span>
                                    </div>
                                    <div class="actions">

                                        <button class="action quickview" data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal" data-bs-target="#modalProduct"><i
                                                class="pe-7s-look"></i></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                    <span class="sale">-10%</span>
                                    <span class="new">New</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="{{ asset('assets/images/product-image/2.webp') }}" alt="Product" />
                                        <img class="hover-image" src="{{ asset('assets/images/product-image/2.webp') }}"
                                            alt="Product" />
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

                                    <button class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="pe-7s-look"></i></button>
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
                                        <img src="{{ asset('assets/images/product-image/3.webp') }}" alt="Product" />
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

                                    <button class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="pe-7s-look"></i></button>
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
                                        <img src="{{ asset('assets/images/product-image/4.webp') }}" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/1.webp"
                                            alt="Product" />
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

                                    <button class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="pe-7s-look"></i></button>
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
                                        <img class="hover-image" src="assets/images/product-image/5.webp"
                                            alt="Product" />
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

                                    <button class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="pe-7s-look"></i></button>
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
                                        <img class="hover-image" src="assets/images/product-image/6.webp"
                                            alt="Product" />
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

                                    <button class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="pe-7s-look"></i></button>
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
                                        <img class="hover-image" src="assets/images/product-image/8.webp"
                                            alt="Product" />
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

                                    <button class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="pe-7s-look"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->

        <!-- Modal -->
        <div class="modal modal-2 fade" id="modalProduct" tabindex="-1" role="dialog">
            @foreach ($getProduct as $item)
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="pe-7s-close"></i></button>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                                <!-- Swiper -->
                                <div class="swiper-container gallery-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="{{$item->product_img}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-buttons">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-details-content quickview-content">
                                    <h2>{{$item->product_name}}</h2>
                                    <div class="pricing-meta">
                                        <ul class="d-flex">
                                            <li class="new-price">@currency($item->price)</li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                                    </div>
                                    <p class="mt-30px">{{$item->product_long_des}}</p>
                                    <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                        <span>SKU:</span>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="#">Ch-256xl</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                        <span>Categories: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="#">{{$item->product_category_name}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart">
                                            <button class="add-cart"> Add To
                                                Cart</button>
                                        </div>
                                        <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                            <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                    </div>
                                    <div class="payment-img">
                                        <a href="#"><img src="{{asset('users/assets/images/icons/payment.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <!-- Modal end -->
        <!-- Modal Cart -->
        <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                        <div class="tt-modal-messages">
                            <i class="pe-7s-check"></i> Added to cart successfully!
                        </div>
                        <div class="tt-modal-product">
                            <div class="tt-img">
                                <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                            </div>
                            <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal wishlist -->
        <div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                        <div class="tt-modal-messages">
                            <i class="pe-7s-check"></i> Added to Wishlist successfully!
                        </div>
                        <div class="tt-modal-product">
                            <div class="tt-img">
                                <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                            </div>
                            <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
