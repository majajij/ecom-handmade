@extends('base')
@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->



    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sidebar-widget-image">
                        <a href="#" class="single-banner">
                            <img src="assets/images/banner/13.jpg" alt="">
                        </a>
                    </div>
                    <!-- Shop Top Area Start -->
                    <div class="desktop-tab">
                        <div class="shop-top-bar d-flex">
                            <!-- Left Side End -->
                            <div class="shop-tab nav">
                                <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </a>
                                <a href="#shop-list" data-bs-toggle="tab">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Sort By:</p>
                                </div>
                                <div class="shop-select">
                                    <select class="shop-sort" id="option-sort" onchange="selectedOption('sort')">
                                        @foreach ($sort as $index => $text)
                                            <option {{ $loop->first ? 'data-display=' . $text : '' }}
                                                value="{{ $index }}">
                                                {{ $text }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Right Side End -->
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Category:</p>
                                </div>
                                <div class="shop-select">
                                    <select class="shop-sort" id="option-categories"
                                        onchange="selectedOption('categories')">
                                        @foreach ($categories as $category)
                                            <option {{ $loop->first ? 'data-display=' . $category->name : '' }}
                                                value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Right Side End -->
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Show:</p>
                                </div>
                                <div class="shop-select show">
                                    <select class="shop-sort" id="option-show" onchange="selectedOption('show')">
                                        @foreach ($show as $num)
                                            <option {{ $loop->first ? 'data-display=' . $num : '' }}
                                                value="{{ $num }}">
                                                {{ $num }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Right Side End -->
                            <!-- Left Side start -->
                            {{-- <p class="compare-product">Product Compare <span>(0) </span></p> --}}
                        </div>
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Mobile shop bar -->
                    <div class="shop-top-bar mobile-tab">
                        <!-- Left Side End -->
                        <div class="shop-tab nav d-flex justify-content-between">
                            <div class="shop-tab nav">
                                <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </a>
                                <a href="#shop-list" data-bs-toggle="tab">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Sort By:</p>
                                </div>
                                <div class="shop-select">
                                    <select class="shop-sort" id="option-sort" onchange="selectedOption('sort')">
                                        @foreach ($sort as $index => $text)
                                            <option {{ $loop->first ? 'data-display=' . $text : '' }}
                                                value="{{ $index }}">
                                                {{ $text }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Category:</p>
                                </div>
                                <div class="shop-select">
                                    <select class="shop-sort" id="option-categories"
                                        onchange="selectedOption('categories')">
                                        @foreach ($categories as $category)
                                            <option {{ $loop->first ? 'data-display=' . $category->name : '' }}
                                                value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Right Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center justify-content-between">
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Show:</p>
                                </div>
                                <div class="shop-select show">
                                    <select class="shop-sort" id="option-show" onchange="selectedOption('show')">
                                        @foreach ($show as $num)
                                            <option {{ $loop->first ? 'data-display=' . $num : '' }}
                                                value="{{ $num }}">
                                                {{ $num }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Right Side End -->
                            <!-- Left Side start -->
                            <p class="compare-product">Product Compare <span>(0) </span></p>
                        </div>
                    </div>
                    <!-- Mobile shop bar -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Hand-Made Garlic
                                                                Mortar
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/2.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">-10%</span>
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Handmade Ceramic
                                                                Pottery
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                            <span class="old">$45.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/3.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/3.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">Sale</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Hand Painted
                                                                Bowls
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/4.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/5.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">-5%</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Antique Wooden
                                                                Farm Large
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                            <span class="old">$40.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/6.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/6.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Handmade Jute
                                                                Basket
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6  mb-30px" data-aos="fade-up"
                                                data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/7.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/7.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Knitting yarn &
                                                                crochet hook
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/8.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/8.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">-8%</span>
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">David Head
                                                                Portraits
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                            <span class="old">$44.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/9.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/10.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">Sale</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">solid wood
                                                                cherry paddle
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">Hand-Made Garlic
                                                                Mortar
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-6 mb-30px mobile-view" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/8.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/8.jpg" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="sale">-8%</span>
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="wishlist.html" class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                            <a href="compare.html" class="action compare"
                                                                title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num d-none">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product.html">David Head
                                                                Portraits
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                            <span class="old">$44.50</span>
                                                        </span>
                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="shop-list">
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/1.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/1.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Hand-Made
                                                                    Garlic
                                                                    Mortar
                                                                </a></h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                exercitation ullamco laboris </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/2.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/2.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 80%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 4 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Handmade
                                                                    Ceramic
                                                                    Pottery
                                                                </a>
                                                            </h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                exercitation ullamco laboris </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$48.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/3.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/3.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="sale">-7%</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 0%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 0 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Hand Painted
                                                                    Bowls
                                                                </a></h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                exercitation ullamco laboris </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$45.00</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/4.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/4.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">Sale</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 70%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 3.5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Antique
                                                                    Wooden
                                                                    Farm Large
                                                                </a></h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                exercitation ullamco laboris </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/5.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/5.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="sale">-5%</span>
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Handmade Jute
                                                                    Basket
                                                                </a></h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                exercitation ullamco laboris </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$45.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/6.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/6.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Knitting yarn
                                                                    &
                                                                    crochet hook
                                                                </a> </h5>

                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                exercitation ullamco laboris </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/7.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/7.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 80%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 4 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">David Head
                                                                    Portraits
                                                                </a></h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                exercitation ullamco laboris </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/8.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/8.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">Sale</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 60%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 3 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">solid wood
                                                                    cherry paddle
                                                                </a></h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                exercitation ullamco laboris </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/9.jpg"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="assets/images/product-image/9.jpg"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">Sale</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 60%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 3 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product.html">Hand-Made
                                                                    Garlic
                                                                    Mortar
                                                                </a></h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmodol tempor incididunt ut labore et dolore
                                                                magna aliqua. Ut enim ad minim veni quis nostrud
                                                                exercitation ullamco laboris </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="wishlist.html" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                <a href="compare.html" class="action compare"
                                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            </div>
                                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                                To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->

                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center text-lg-end mb-0" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="pages">
                                <ul>
                                    <li class="li"><a class="page-link" href="#"><i
                                                class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="li"><a class="page-link" href="#">1</a></li>
                                    <li class="li"><a class="page-link active" href="#">2</a></li>
                                    <li class="li"><a class="page-link" href="#">3</a></li>
                                    <li class="li"><a class="page-link" href="#"><i
                                                class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->
@endsection

@section('add_script')
    <script>
        function selectedOption(option_type) {
            alert($('#option-' + option_type).val())
        }
    </script>
@endsection
