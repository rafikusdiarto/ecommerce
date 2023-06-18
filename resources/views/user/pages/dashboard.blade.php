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
                            <a href="{{route('laptop.show')}}" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-banner nth-child-2 mb-lm-30px p-5">
                        <img src="{{ asset('users/assets/images/category/monitors.png') }}" alt="">
                        <div class="banner-content nth-child-3">
                            <a href="{{route('display.show')}}" class="shop-link">Shop Now <i class="fa fa-arrow-right"
                                aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-banner nth-child-2 mb-lm-30px p-5">
                        <img src="{{ asset('users/assets/images/category/components.png') }}" alt="">
                        <div class="banner-content nth-child-3">
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
                                <div class="card h-100 product">
                                    <div class="thumb">
                                        <a class="image text-center">
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
                                            data-bs-toggle="modal" data-bs-target="#modalProduct{{$item->id}}"><i
                                                class="pe-7s-look"></i></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->

        <!-- Modal -->
        @foreach ($getProduct as $item)
        <div class="modal modal-2 fade" id="modalProduct{{$item->id}}" tabindex="-1" role="dialog">
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
                                    <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                        <span>Stok: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="#">{{$item->quantity}}</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="pro-details-quality">
                                        <form action="{{url('/user/add-to-cart')}}" method="POST">
                                        @csrf
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="number" name="quantity" min="1" placeholder="1" />
                                            </div>
                                            <div class="pro-details-cart">
                                                <input type="hidden" value="{{$item->id}}" name="product_id" id="product_id">
                                                <input type="hidden" value="{{$item->price}}" name="price" id="price">
                                                <input type="hidden" value="" name="quantity" id="quantity">
                                                <button class="add-cart" type="submit"> Add To Cart</button>
                                            </div>
                                        </form>
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

        </div>
        @endforeach
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
