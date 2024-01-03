@extends('user.layouts.app')

@section('content')
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            @if (session('success'))
                <div alert class="alert alert-success">
                    {{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div alert class="alert alert-danger">
                    {{ session('error') }}</div>
            @endif
            @if (session('failed'))
                <div alert class="alert alert-info">
                    {{ session('failed') }}</div>
            @endif
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <div class="product-details-img product-details-tab product-details-tab-2 d-flex">
                        <div class="swiper-container mr-15px zoom-thumbs-2 align-self-start slider-nav-style-1 small-nav">
                            <div class="swiper-wrapper">
                                @if ($getSingleProduct->quantity == 0)
                                    
                                @else
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                            alt="">
                                    </div>
                                @endif
                            </div>
                            <!-- Add Arrows -->
                            <!-- <div class="swiper-buttons">
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div> -->
                        </div>
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top-2 align-self-start">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    @if ($getSingleProduct->quantity == 0)
                                        <div>
                                            <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                            alt="" style="filter:blur(2px)"">
                                            <h2 class="text-danger alert alert-warning"
                                                style="position: absolute;top: 0;
                                                left: 0;z-index:3">
                                                SOLD OUT</h2>
                                        </div>
                                    @else
                                        <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                            alt="">
                                            <a class="venobox full-preview" data-gall="myGallery"
                                                href="{{ asset($getSingleProduct->product_img) }}">
                                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                            </a>
                                    @endif
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                        alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                        href="{{ asset($getSingleProduct->product_img) }}">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                        alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                        href="{{ asset($getSingleProduct->product_img) }}">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                        alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                        href="{{ asset($getSingleProduct->product_img) }}">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{ asset($getSingleProduct->product_img) }}"
                                        alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                        href="{{ asset($getSingleProduct->product_img) }}">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2>{{ $getSingleProduct->product_name }}</h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                <li class="new-price">@currency($getSingleProduct->price)</li>
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
                            <span class="read-review"><a class="reviews" href="#">({{ $countReview }} Customer
                                    Review)</a></span>
                        </div>
                        <p class="mt-30px">{{ $getSingleProduct->product_short_des }}</p>
                        <div class="row">
                            <div class="col">
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Product Code: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">GMD-030001</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Stock: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">{{ $getSingleProduct->quantity }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Subcategory: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">{{ $getSingleProduct->product_subcategory_name }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">{{ $getSingleProduct->product_category_name }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Tags: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">Phone</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <form action="{{ url('/user/add-to-cart', $getSingleProduct->id) }}" method="post">
                            @csrf
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="number" name="jumlah_order"
                                        value="1" />
                                </div>
                                @if ($getSingleProduct->quantity == 0)
                                <div class="pro-details-cart" style="display: block">
                                    <button class="add-cart" type="submit" disabled> Add To
                                        Cart</button>
                                </div>
                                @else

                                <div class="pro-details-cart" style="display: block">
                                    <button class="add-cart" type="submit"> Add To
                                        Cart</button>
                                </div>
                                @endif

                                {{-- <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                            </div> --}}
                            </div>
                        </form>

                    </div>
                    <!-- product details description area start -->
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <button class="active" data-bs-toggle="tab"
                                data-bs-target="#des-details1">Description</button>
                            <button data-bs-toggle="tab" data-bs-target="#des-details3">{{ $countReview }}
                                Reviews</button>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <p>
                                        {{ $getSingleProduct->product_long_des }}
                                    </p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="review-wrapper">
                                            @foreach ($getReview as $item)
                                                <div class="single-review">
                                                    {{-- <div class="review-img">
                                                        <img src="assets/images/review-image/1.png" alt="" />
                                                    </div> --}}
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4>{{ $item->user->name }}</h4>
                                                                </div>
                                                                <div class="rating-product">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="review-bottom">
                                                            <p>
                                                                {{ $item->review_description }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form method="POST"
                                                    action="{{ route('createreview', $getSingleProduct->id) }}"
                                                    enctype="multipart/form-data">
                                                    <div class="star-box">
                                                        <span>Your rating:</span>
                                                        <div class="rating-product">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        @csrf
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <input type="hidden" value="{{ $getSingleProduct->id }}"
                                                                    name="product_id">
                                                                <textarea name="review_description" placeholder="Message"></textarea>
                                                                <button class="btn btn-primary"
                                                                    type="submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product details description area end -->
        </div>
    </div>
    </div>
    @if (session('success'))
        <script>
            Swal.fire("Sukses", `{{ session('success') }}`, "success");
        </script>
    @endif
@endsection
