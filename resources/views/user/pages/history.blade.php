@extends('user.layouts.app')

@section('content')
<div class="shop-category-area pt-100px pb-100px">
    <div class="container">
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
                                                        <a href="single-product.html" class="image">
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
                                                        <h5 class="title"><a href="single-product.html">{{$item->product->product_name}}</a></h5>
                                                        <p>{{$item->product->product_short_des}}</p>
                                                    </div>
                                                    <div class="box-inner">
                                                        <span class="price">
                                                        <span class="new d-block">@currency($item->total_price)</span>
                                                        <span class="new d-block mt-2">Total Order : {{$item->total_quantity}}</span>
                                                        </span>
                                                        <div class="actions">
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
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
