<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming | Rmart</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('users/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('users/assets/css/font.awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('users/assets/css/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('users/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/css/jquery-ui.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('users/assets/css/style.css')}}">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://kit.fontawesome.com/29d4f5ffc9.js" crossorigin="anonymous"></script>
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
    <style>
       input[type="number"] {
  -webkit-appearance: textfield;
     -moz-appearance: textfield;
          appearance: textfield;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
}
    </style>
</head>

<body>
    <div class="main-wrapper">
        @include('user.components.header')
        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->

        <!-- OffCanvas Cart Start -->
            <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
                <div class="inner">
                    <div class="head">
                        <span class="title">Cart</span>
                        <button class="offcanvas-close">×</button>
                    </div>
                    <div class="body customScroll">
                        <ul class="minicart-product-list">
                            @foreach ($getOrder as $item)
                                <form action="{{route('updatecart', $item->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                    <li class="my-4">
                                        <a href="single-product.html" class="image"><img src="{{asset($item->product->product_img)}}" alt="Cart product Image"></a>
                                        <div class="content">
                                            <a class="title" href="{{ route('singleproduct', $item->product->id) }}">{{ $item->product->product_name }}
                                                <div class="d-flex">
                                                <input type="number" name="total_quantity" value="{{$item->total_quantity}}" class="form-control"/>
                                                <p class="mx-2">x</p>
                                                <span class="amount">@currency($item->product->price)</span>
                                            </div>
                                            <button type="submit" class="bg-info rounded">Save</button>
                                            <a href="{{route('removecart', $item->id)}}" class="remove">×</a>
                                        </div>
                                    </li>
                                </form>
                            @endforeach
                        </ul>
                    </div>
                    <div class="foot">
                        <div class="buttons mt-30px">
                            <a href="{{url('/user/my-cart')}}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                        </div>
                    </div>
                </div>
            </div>

        @include('user.components.navbar-mobile')

        @yield('content')

        @include('user.components.footer')

    </div>


    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="{{asset('users/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('users/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('users/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('users/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/scrollUp.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/venobox.min.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('users/assets/js/plugins/mailchimp-ajax.js')}}"></script>
    {{-- <script>
        AOS.init();
    </script> --}}

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="{{asset('users/assets/js/main.js')}}"></script>
    @yield('extraJS')
</body>

</html>
