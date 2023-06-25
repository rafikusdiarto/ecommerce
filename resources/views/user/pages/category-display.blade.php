@extends('user.layouts.app')

@section('content')
<div class="shop-category-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <p class="compare-product"> <span>{{$countCategory}}</span> Product Found </p>
                    <!-- Left Side End -->
                    <div class="shop-tab nav">
                        <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </button>
                        <button data-bs-target="#shop-list" data-bs-toggle="tab">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </button>
                    </div>
                    <!-- Right Side Start -->
                    {{-- <div class="select-shoing-wrap d-flex align-items-center">
                        <div class="shot-product">
                            <p>Sort By:</p>
                        </div>
                        <!-- Single Wedge End -->
                        <div class="header-bottom-set dropdown">
                            <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Default <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                <li><a class="dropdown-item" href="#">Sort By new</a></li>
                                <li><a class="dropdown-item" href="#">Sort By old</a></li>
                            </ul>
                        </div>
                        <!-- Single Wedge Start -->
                    </div> --}}
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->
                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area">
                    <!-- Tab Content Area Start -->
                    <div class="row">
                        <div class="col">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="shop-grid">
                                    <div class="row mb-n-30px">
                                        @foreach ($getCategory as $item)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                            <!-- Single Prodect -->
                                            <div class="product h-100">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img src="{{asset($item->product_img)}}" alt="Product" />
                                                        <img class="hover-image" src="{{asset($item->product_img)}}" alt="Product" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <span class="category"><a href="#">{{$item->product_category_name}}</a></span>
                                                    <h5 class="title"><a href="single-product.html">{{$item->product_name}}
                                                        </a>
                                                    </h5>
                                                    <span class="price">
                                                    <span class="new">@currency($item->price)</span>
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    {{-- <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                        class="pe-7s-shopbag"></i></button>
                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                        class="pe-7s-like"></i></button> --}}
                                                        {{-- <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                class="pe-7s-refresh-2"></i></button> --}}
                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#modalProduct{{$item->id}}"><i class="pe-7s-look"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade mb-n-30px" id="shop-list">
                                    @foreach ($getCategory as $item)
                                    <div class="shop-list-wrapper mb-30px">
                                        <div class="row">
                                            <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{asset($item->product_img)}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset($item->product_img)}}" alt="Product" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-lg-7 col-xl-8">
                                                <div class="content-desc-wrap">
                                                    <div class="content">
                                                        <span class="category"><a href="#">{{$item->product_category_name}}</a></span>
                                                        <h5 class="title"><a href="single-product.html">{{$item->product_name}}</a></h5>
                                                        <p>{{$item->product_short_des}}</p>
                                                    </div>
                                                    <div class="box-inner">
                                                        <span class="price">
                                                        <span class="new">@currency($item->price)</span>
                                                        </span>
                                                        <div class="actions">
                                                            <form action="{{url('/user/add-to-cart/'.$item->id.'')}}" enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                @method('post')
                                                                <input class="form-control col-sm" type="hidden" name="jumlah_order" min="1" value="1" placeholder="jumlah order"/>
                                                                <button title="Add To Cart" class="action add-to-cart me-2" type="submit"><i
                                                                    class="pe-7s-shopbag"></i></button>
                                                            </form>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#modalProduct{{$item->id}}"><i class="pe-7s-look"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Content Area End -->
                    <!--  Pagination Area Start -->
                    {{-- <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
                        <div class="pages">
                            <ul>
                                <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li class="li"><a class="page-link" href="#">1</a></li>
                                <li class="li"><a class="page-link active" href="#">2</a></li>
                                <li class="li"><a class="page-link" href="#">3</a></li>
                                <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!--  Pagination Area End -->
                </div>
                @foreach ($getCategory as $item)
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
                                                    <img class="img-responsive m-auto" src="{{asset($item->product_img)}}" alt="">
                                                </div>
                                                {{-- <div class="swiper-slide">
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
                                                </div> --}}
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
                                                                <input class="form-control col-sm" type="number" name="jumlah_order" min="1" placeholder="jumlah order"/>
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
                <!-- Shop Bottom Area End -->
            </div>
        </div>
    </div>
</div>
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
@endsection
