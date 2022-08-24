@extends('base')
@section('content')
    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height swiper-slide d-flex bg-color1"
                    data-bg-image="assets/images/slider-image/slider-bg-1.jpg">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <h2 class="title-1">Best Handmade <br class="d-sm-none"> Goods</h2>
                                    <span class="price">
                                        <span class="old"> <del>$25.00</del></span>
                                        <span class="new">- $18.00</span>
                                    </span>
                                    <a href="shop-left-sidebar.html" class="btn btn-primary m-auto text-uppercase">View
                                        Collection</a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="assets/images/slider-image/slider-1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height swiper-slide d-flex bg-color1"
                    data-bg-image="assets/images/slider-image/slider-bg-1.jpg">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <h2 class="title-1">Best Handmade <br class="d-sm-none"> Goods</h2>
                                    <span class="price">
                                        <span class="old"> <del>$25.00</del></span>
                                        <span class="new">- $18.00</span>
                                    </span>
                                    <a href="shop-left-sidebar.html" class="btn btn-primary m-auto text-uppercase">View
                                        Collection</a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="assets/images/slider-image/slider-2.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

    <!-- Banner Area Start -->
    <div class="banner-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="single-col">
                    <div class="single-banner">
                        <img src="assets/images/banner/1.jpg" alt="">
                        <div class="banner-content">
                            <span class="category">Best Seller</span>
                            <span class="title">Flower Vase <br>
                                & Poot</span>
                            <a href="shop-left-sidebar.html" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="single-col center-col">
                    <div class="single-banner">
                        <img src="assets/images/banner/2.jpg" alt="">
                        <div class="banner-content">
                            <span class="category">Best Seller</span>
                            <span class="title">Wool Silk Dress <br>
                                & Offer 2021</span>
                            <a href="shop-left-sidebar.html" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="single-col">
                    <div class="single-banner">
                        <img src="assets/images/banner/3.jpg" alt="">
                        <div class="banner-content">
                            <span class="category">Best Seller</span>
                            <span class="title">Pen Holder<br>
                                & Poot</span>
                            <a href="shop-left-sidebar.html" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <div class="product-area">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center mb-60px">
                        <h2 class="title">Popular Categories</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut labore
                            et dolore magna aliqua. </p>
                    </div>
                    <!-- Popular Categories -->
                    @if ($popular_categories)
                        <div class="tab-slider swiper-container slider-nav-style-1 small-nav">
                            <ul class="product-tab-nav nav swiper-wrapper ">
                                @foreach ($popular_categories as $cat)
                                    <li class="nav-item swiper-slide"><a class="nav-link" data-bs-toggle="tab"
                                            href="/categories/{{ $cat->id }}"> <img src="{{ $cat->image }}"
                                                alt=""><span>{{ $cat->name }}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    @else
                        There is no categories!
                    @endif
                    <!-- Popular Categories -->
                </div>
                <!-- Section Title End -->

            </div>
            <!-- Section Title & Tab End -->

            <!-- Section Title & Tab Start -->
            <div class="row mt-30px">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Bestsellers Items</h2>
                    </div>

                </div>
                <!-- Section Title End -->
            </div>
            <!-- Section Title & Tab End -->

            <div class="row">
                <div class="col">
                    <div class="tab-content mt-30px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active">
                            <div class="new-product-slider swiper-container slider-nav-style-1 pb-100px">
                                <div class="new-product-wrapper swiper-wrapper">
                                    @foreach ($products as $product)
                                        <div class="new-product-item swiper-slide">
                                            <!-- Single Prodect -->
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="/products/{{ $product->id }}" class="image">
                                                        <img src="{{ asset(count($product->images) > 0 ? $product->images[0]->path : 'assets/images/product-image/none.jpg') }}"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset(count($product->images) > 0 ? $product->images[0]->path : 'assets/images/product-image/none.jpg') }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        {!! $product->promo ? '<span class="sale">-' . $product->promo_percent . '%</span>' : '' !!}
                                                        {!! $product->new ? '<span class="new">New</span>' : '' !!}
                                                        {!! $product->best_sale ? '<span class="new">Sale</span>' : '' !!}
                                                    </span>
                                                    <div class="actions">
                                                        <a href="wishlist.html" class="action wishlist"
                                                            title="Wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" onclick="quickViewProduct({{ $product->id }})"
                                                            class="action quickview" data-link-action="quickview"
                                                            title="Quick view" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                                class="pe-7s-refresh-2"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num">( 5 Review )</span>
                                                    </span>
                                                    <h5 class="title"><a
                                                            href="/products/{{ $product->id }}">{{ $product->name }}</a>
                                                    </h5>
                                                    <span class="price">
                                                        {!! $product->price ? '<span class="new">$' . $product->price . '</span>' : '' !!}
                                                        {!! $product->old_price ? '<span class="old">$' . $product->old_price . '</span>' : '' !!}
                                                    </span>
                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart">Add
                                                    To Cart</button>
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
                        <!-- 1st tab end -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Deal Area Start -->
    <div class="deal-area pb-60px pt-60px">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="deal-inner deal-bg position-relative ptb-80px"
                        data-bg-image="assets/images/deal-img/deal-bg.jpg">
                        <div class="deal-wrapper">
                            <h3 class="title">Handmade Pen Holder <br>
                                & Offer Sale -20% </h3>
                            <span class="price">
                                <span class="old"> <del>$25.00</del></span>
                                <span class="new">- $18.00</span>
                            </span>
                            <a href="single-product-variable.html" class="btn btn-lg btn-primary">Add To Cart</a>
                        </div>
                        <div class="deal-image">
                            <img class="img-fluid" src="assets/images/deal-img/woman.png" alt="">
                            <div class="discount">
                                <h3>-20%</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Area End -->

    <!-- Feature Area Srart -->
    <div class="feature-area mb-30px mt-30px">
        <div class="container">
            <div class="feature-wrapper">
                <div class="single-feture-col">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Free Shipping</h4>
                            <span class="sub-title">Capped at $39 per order</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col ">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Card Payments</h4>
                            <span class="sub-title">12 Months Installments</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Easy Returns</h4>
                            <span class="sub-title">Shop With Confidence</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->

    <!-- Testimonial Area Start -->
    <div class="banner-area-2">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-6 p-0">
                    <div class="single-banner nth-child-1">
                        <img src="assets/images/banner/4.jpg" alt="">
                        <div class="banner-content nth-child-1">
                            <span class="category">Best Seller</span>
                            <span class="title">Handmade Pot <br>
                                & Pen Holder</span>
                            <a href="shop-left-sidebar.html" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 ">
                    <div class="single-banner nth-child-2 mb-lm-30px mt-lm-30px">
                        <img src="assets/images/banner/5.jpg" alt="">
                        <div class="banner-content nth-child-2">
                            <span class="category">Best Seller</span>
                            <span class="title">Wool Silk Pod <br>
                                -20% Off</span>
                            <a href="shop-left-sidebar.html" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                    <div class="single-banner nth-child-3">
                        <img src="assets/images/banner/6.jpg" alt="">
                        <div class="banner-content nth-child-3">
                            <span class="category">Best Seller</span>
                            <span class="title">Handmade Plate <br>
                                -40 Off</span>
                            <a href="shop-left-sidebar.html" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->

    <!--  Blog area Start -->
    <div class="main-blog-area pb-100px pt-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30px0px">
                        <h2 class="title">Latest Blog</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/1.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <span> By,<a class="blog-author cercle-shape" href="#"> June Cha</a></span>
                                <span class="blog-date">25 May, 2121</span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="blog-single-left-sidebar.html">How to Explain Handmade Product to Your
                                    Boss</a></h5>

                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px">
                    <div class="single-blog ">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/2.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <span> By,<a class="blog-author cercle-shape" href="#"> June Cha</a></span>
                                <span class="blog-date">25 May, 2121</span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">7
                                    Best Blogs to Follow About Handmade Goods
                                </a></h5>

                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/3.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <span> By,<a class="blog-author cercle-shape" href="#"> June Cha</a></span>
                                <span class="blog-date">25 May, 2121</span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Us
                                    Too. 6 Reasons We Just Can't Stop
                                </a></h5>


                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
            </div>
        </div>
    </div>
    <!--  Blog area End -->
@endsection
