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
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">New Products</h2>
                        <p>There are many variations of passages of Lorem Ipsum available</p>
                    </div>
                </div>
            </div>

            {{-- product --}}
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
                                        <h5 class="title"><a href="{{route('singleproduct', $item->id)}}">{{ $item->product_name }}
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

            {{-- discount --}}
            <div class="feature-product-area pb-100px pt-100px">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h2 class="title">Best Offers</h2>
                                <p>There are many products discount are available</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-product-slider swiper-container slider-nav-style-1">
                        <div class="swiper-wrapper product">
                                @foreach ($getProductDiscount as $item)
                                <div class="swiper-slide feature-right-content">
                                    <div class="image-side">
                                        <span class="badges text-white">
                                            <span class="sale">{{$item->percent_discount}}%</span>
                                        </span>
                                        <img src="{{$item->product->product_img}}" alt="">
                                    </div>
                                    <div class="content-side">
                                        {{-- <div class="deal-timing">
                                            <span>End In: </span>
                                            <div data-countdown="{{$item->active_period}}"></div>

                                        </div> --}}
                                        <div class="prize-content">
                                            <h5 class="title"><a>{{$item->product->product_name}}</a></h5>
                                            <span class="price">
                                        <span class="old">@currency($item->product->price)</span>
                                            <span class="new">@currency($item->price_discount)</span>
                                            </span>
                                        </div>
                                        <div class="product-feature">
                                            <ul>
                                                <li>Predecessor : <span>None.</span></li>
                                                <li>Support Type : <span>Neutral.</span></li>
                                                <li>Cushioning : <span>High Energizing.</span></li>
                                                <li>Total Weight : <span> 300gm</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
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
                                        <div class="pro-details-cart col-lg d-flex">
                                            <form action="{{url('/user/add-to-cart/'.$item->id.'')}}" enctype="multipart/form-data" method="POST">
                                            @csrf
                                            @method('post')
                                                <div class="d-flex">
                                                    <div>
                                                        <input class="form-control col-sm" type="number" name="jumlah_order" placeholder="jumlah order"/>
                                                        {{-- <input type="hidden" value="{{$item->id}}" name="product_id" id="product_id"> --}}
                                                    </div>
                                                    <div>
                                                        <button class="add-cart" type="submit"> Add To Cart</button>
                                                    </div>
                                                </div>
                                            </form>
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

        </div>
        @endforeach
        <!-- Modal end -->
        <!-- Modal Cart -->

        @if(session("success"))
        <script>
            Swal.fire("Sukses", `{{ session("success") }}`, "success");
        </script>
        @endif
        @if(session("failed"))
        <script>
            Swal.fire("Reject", `{{ session("failed") }}`, "error");
        </script>
        @endif

        <script>
            $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('%D days %H:%M:%S'));
            });
            });
        </script>

@endsection
