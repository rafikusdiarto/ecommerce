@extends('user.layouts.app')

@section('content')
<div class="product-area related-product">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center m-0">
                    <h2 class="title">Related Products</h2>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <h1>comp</h1>
        <!-- Section Title & Tab End -->
        <div class="row">
            <div class="col">
                <div class="new-product-slider swiper-container slider-nav-style-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                <span class="new">New</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/1.webp" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Accessories</a></span>
                                    <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                        </a>
                                    </h5>
                                    <span class="price">
                                    <span class="new">$38.50</span>
                                    </span>
                                </div>
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
                        <div class="swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                <span class="sale">-10%</span>
                                <span class="new">New</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/2.webp" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/2.webp" alt="Product" />
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
                        <div class="swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                <span class="new">Sale</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/3.webp" alt="Product" />
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
                        <div class="swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                <span class="new">New</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/4.webp" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
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
                        <div class="swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                            </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/5.webp" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/5.webp" alt="Product" />
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
                        <div class="swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                <span class="sale">-8%</span>
                                <span class="new">Sale</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/6.webp" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/6.webp" alt="Product" />
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
                        <div class="swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                <span class="new">Sale</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/7.webp" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="category"><a href="#">Accessories</a></span>
                                    <h5 class="title"><a href="single-product.html">Round Pocket Router
                                        </a>
                                    </h5>
                                    <span class="price">
                                    <span class="new">$38.50</span>
                                    </span>
                                </div>
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
                        <div class="swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                <span class="sale">-5%</span>
                                </span>
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img src="assets/images/product-image/8.webp" alt="Product" />
                                        <img class="hover-image" src="assets/images/product-image/8.webp" alt="Product" />
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
@endsection
