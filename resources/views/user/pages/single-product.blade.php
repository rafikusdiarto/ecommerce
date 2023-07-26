@extends('user.layouts.app')

@section('content')
<div class="product-details-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <!-- Swiper -->
                <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{asset($getSingleProduct->product_img)}}" alt="">
                            <a class="venobox full-preview" data-gall="myGallery" href="{{asset($getSingleProduct->product_img)}}">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{asset($getSingleProduct->product_img)}}" alt="">
                            <a class="venobox full-preview" data-gall="myGallery" href="{{asset($getSingleProduct->product_img)}}">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{asset($getSingleProduct->product_img)}}" alt="">
                            <a class="venobox full-preview" data-gall="myGallery" href="{{asset($getSingleProduct->product_img)}}">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{asset($getSingleProduct->product_img)}}" alt="">
                            <a class="venobox full-preview" data-gall="myGallery" href="{{asset($getSingleProduct->product_img)}}">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{asset($getSingleProduct->product_img)}}" alt="">
                            <a class="venobox full-preview" data-gall="myGallery" href="{{asset($getSingleProduct->product_img)}}">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                <div class="product-details-content quickview-content ml-25px">
                    <h2>{{$getSingleProduct->product_name}}</h2>
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
                        <span class="read-review"><a class="reviews" href="#">(5 Customer Review)</a></span>
                    </div>
                    <p class="mt-30px">{{$getSingleProduct->product_short_des}}</p>
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
                                <a>{{$getSingleProduct->product_category_name}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- product details description area start -->
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Description</button>
                        <button data-bs-toggle="tab" data-bs-target="#des-details3">Reviews {{$countReview}}</button>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <p>
                                    {{$getSingleProduct->product_long_des}}
                                </p>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="review-wrapper">
                                        <div class="single-review d-block">
                                            {{-- <div class="review-img">
                                                <img src="{{asset('assets/images/review-image/1.png')}}" alt="" />
                                            </div> --}}
                                            @foreach ($getReview as $item)
                                                <div class="review-content mb-4">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left d-block">
                                                            <div class="review-name">
                                                                <h4>{{$item->user->name}}</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="review-bottom">
                                                                <p>
                                                                    {{$item->review_description}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="ratting-form-wrapper pl-50">
                                        <h3>Add a Review</h3>
                                        <div class="ratting-form">
                                            <form method="POST" action="{{route('createreview', $getSingleProduct->id)}}" enctype="multipart/form-data">
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
                                                                <input type="hidden" value="{{$getSingleProduct->id}}" name="product_id">
                                                                <textarea name="review_description" placeholder="Message"></textarea>
                                                                <button class="btn btn-primary" type="submit">Submit</button>
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
                <!-- product details description area end -->
            </div>
        </div>
    </div>
</div>
@if(session("success"))
<script>
    Swal.fire("Sukses", `{{ session("success") }}`, "success");
</script>
@endif

@endsection
