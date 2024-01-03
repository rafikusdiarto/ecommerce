@extends('user.layouts.app')

@section('content')
<div class="shop-category-area pt-100px pb-100px">
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
            <div class="col-lg-12 order-lg-last col-md-12 order-md-first">
                <div class="shop-top-bar d-flex">
                    <p class="compare-product"> <span>{{$countHistoryOrder}}</span>History Order Found</p>
                    <div class="d-flex col-3">
                        {{-- <form id="filterForm">
                            <div class="form-group">
                                <select class="form-control" id="filterSelect" name="filter">
                                    <option value="" name="filter">Semua</option>
                                    <option value="new" name="filter">Baru</option>
                                    <option value="old" name="filter">Lama</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="btn-primary bg-primary">Filter</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
                <div class="shop-bottom-area">
                    <!-- Tab Content Area Start -->
                    <div class="row">
                        <div class="col">
                            <div class="tab-content">
                                <div id="productList" class="tab-pane fade mb-n-30px show active">
                                    @foreach ($getHistoryOrder as $item)
                                    <div class="shop-list-wrapper mb-30px">
                                        <div class="row">
                                            <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a class="image">
                                                            <img src="{{asset($item->product->product_img)}}" alt="Product" />
                                                            <img class="hover-image" src="{{asset($item->product->product_img)}}" alt="Product" />
                                                        </a>
                                                        @if ($item->status == 'paid')
                                                            <span class="badges">
                                                            <span class="sale bg-success">Success</span>
                                                            </span>
                                                        @elseif ($item->status == 'not paid')
                                                        <span class="badges">
                                                            <span class="sale bg-warning">Pending</span>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-lg-7 col-xl-8">
                                                <div class="content-desc-wrap">
                                                    <div class="content">
                                                        <span class="category"><a href="#">{{$item->product->product_category_name}}</a></span>
                                                        <h5 class="title">
                                                            <a href="{{ route('singleproduct', $item->product->id) }}">{{ $item->product->product_name }}
                                                            </a>
                                                        </h5>
                                                        <p>{{$item->product->product_short_des}}</p>
                                                    </div>
                                                    <div class="box-inner">
                                                        <span class="price">
                                                        <span class="new d-block">@currency($item->total_price)</span>
                                                        <span class="new d-block mt-2">Total Order : {{$item->total_quantity}}</span>
                                                        </span>
                                                        <div class="actions">
                                                            <button class="action quickview openModal" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $item->id }}"><i class="pe-7s-look"></i></button>
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
                    <!-- Modal -->
                        <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
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
                                                            <img class="img-responsive m-auto" id="product_img" src="assets/images/product-image/zoom-image/1.webp" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                                                <div class="product-details-content quickview-content">
                                                    <h2 id="product_name"></h2>
                                                    <div class="pricing-meta">
                                                        <ul class="d-flex">
                                                            <li class="new-price" id="harga"></li>
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
                                                    <p class="mt-30px" id="product_short_des"></p>
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
                                                                <a id="product_categories"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Modal end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--
@section('extraJS')
<script>
    $(document).ready(function() {
        // Meng-handle submit form filter
        $('#filterForm').on('submit', function(event) {
            event.preventDefault();
            filterProduk();
        });

        // Fungsi untuk memfilter produk menggunakan AJAX
        function filterProduk() {
            var filter = $('#filterSelect').val();

            $.ajax({
                url: '/user/history/filter',
                type: 'GET',
                data: {
                    filter: filter
                },
                success: function(response) {
                    // Menghapus semua produk sebelumnya
                    console.log(response)
                    $('#productList').empty();

                    // Memperbarui tampilan produk
                    if (response.length > 0) {
                        $.each(response, function(index, response) {
                            var html = `
                                        <div class="shop-list-wrapper mb-30px">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="`+ (response.product_img) +`" alt="Product" />
                                                                <img class="hover-image" src="`+ (response.product_img) +`" alt="Product" />
                                                            </a>
                                                            `+ @if ($item->status == 'paid') +`
                                                                <span class="badges">
                                                                <span class="sale bg-success">Success</span>
                                                                </span>
                                                            `+ @elseif ($item->status == 'not paid') +`
                                                            <span class="badges">
                                                                <span class="sale bg-warning">Pending</span>
                                                                </span>
                                                            `+ @endif +`
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="category"><a href="#">`+ (response.product_category_name) +`</a></span>
                                                            <h5 class="title"><a href="single-product.html">`+ (response.product_name) +`</a></h5>
                                                            <p>`+ (response.product_short_des) +`</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                            <span class="new d-block">`+ (response.total_price) +`</span>
                                                            <span class="new d-block mt-2">Total Order : `+ (response.total_quantity) +`</span>
                                                            </span>
                                                            <div class="actions">
                                                                <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    `
                            $('#productList').append(html);
                        });
                    } else {
                        $('#productList').html('<p>Tidak ada produk yang cocok dengan filter.</p>');
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
    });
</script>
@endsection --}}

@section('extraJS')
<script>
    $(document).ready(function () {
        // Open the modal when the button is clicked
        $(".openModal").click(function () {
            var id = $(this).data("id"); // Get the data ID

            $.ajax({
                url: "{{ route('historynew') }}",
                method: "GET",
                data: {
                    id:id
                },
                success: function (response) {
                    // console.log(response)
                    // Populate the modal with the retrieved data details
                    $("#product_name").text(response.product_name);
                    $("#harga").text(`${new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                    }).format(response.price)}`);
                    $("#product_short_des").text(response.product_short_des)
                    $("#product_categories").text(response.product_category_name)
                    var image = `{{asset('')}}${response.product_img}`
                    var imageElement = $('#product_img');
                    imageElement.attr('src', image)

                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            });
            // Make an AJAX request to retrieve the data details

        });

        // Close the modal when the close button is clicked
        $(".close").click(function () {
            $("#myModal").hide();
        });
    });
</script>

@endsection
