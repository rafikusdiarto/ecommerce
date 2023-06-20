@extends('user.layouts.app')

@section('content')
<div class="shop-category-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <p class="compare-product"> <span>12</span> Product Found of <span>30</span></p>
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
                    <div class="select-shoing-wrap d-flex align-items-center">
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
                    </div>
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
                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
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
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
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
                <!-- Shop Bottom Area End -->
            </div>
        </div>
    </div>
</div>
@endsection
