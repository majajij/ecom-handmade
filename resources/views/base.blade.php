<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.head')
</head>

<body>
    <!-- Header Area Start -->
    @include('layouts.navbar')

    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>

            <div class="body customScroll">
                <ul class="minicart-product-list">
                    @if (Cart::count() > 0)
                        @foreach (Cart::content() as $prd)
                            <li>
                                <a href="single-product.html" class="image"><img
                                        src="{{ asset($prd->options->image) }}" alt="Cart product Image"></a>
                                <div class="content">
                                    <a href="single-product.html" class="title">{{ $prd->name }}</a>
                                    <span class="quantity-price">{{ $prd->qty }} x <span
                                            class="amount">${{ $prd->price }}</span></span>
                                    <a href="#" class="remove">×</a>
                                </div>
                            </li>
                        @endforeach
                        <li>
                            <b>Total: ${{ Cart::total() }}</b>
                        </li>
                    @else
                        <li>

                            <div class="content">
                                <a href="/shop" class="title">There is no Product, click here to add new products</a>
                            </div>
                        </li>
                    @endif


                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="/cart" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="/checkout" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    @include('layouts.navbar-mobile')
    <!-- OffCanvas Menu End -->

    @yield('content')

    <div class="newsletter-area ">
        <div class="container line-shape-bottom">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newsletter-content mb-lm-30px">
                        <i class="pe-7s-mail-open-file"></i>
                        <div class="newsletter-text">
                            <h3 class="title">Newsletter & Get Updates</h3>
                            <p>Sign up for our newsletter to get update from us</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="news-letter-form">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank"
                                name="mc-embedded-subscribe-form" method="post"
                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required=""
                                        placeholder="Enter Your Mail Here......." name="EMAIL" value="">
                                    <div class="mc-news d-none" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1"
                                            name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <button id="mc-embedded-subscribe" class="button" type="submit"
                                            name="subscribe" value=""> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area Start -->
    @include('layouts.footer')
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    <div class="modal popup-search-style" id="searchActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span
                aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Search Your Product</h2>
                        <form class="navbar-form position-relative" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                            <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row" id="bodyModal">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper" id="swiper_1">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px">
                                <div class="swiper-wrapper" id="swiper_2">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Hand-Made Garlic Mortar</h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">$20.90</li>
                                        <li class="old-price"><del>$30.90</del></li>
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
                                    <span class="read-review"><a class="reviews" href="#">( 2 Review
                                            )</a></span>
                                </div>
                                <div class="stock mt-30px">
                                    <span class="avallabillty">Availability: <span class="in-stock"><i
                                                class="fa fa-check"></i>In Stock</span></span>
                                </div>
                                <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do
                                    eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni
                                    nostrud exercitation ullamco laboris </p>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                            value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Handmade, </a>
                                        </li>
                                        <li>
                                            <a href="#">Furniture, </a>
                                        </li>
                                        <li>
                                            <a href="#">Decore</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-social-info pro-details-same-style d-flex">
                                    <span>Share: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="assets/images//icons/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <script>
        function quickViewProduct(product_id) {
            $.ajax({
                url: '/quick-view-product/' + product_id,
                type: 'GET',
                dataType: 'json'
            }).done(function(response) {
                console.log(response);
                // swiper-slide-duplicate
                // swiper-slide-prev
                // swiper-slide-active
                // swiper-slide-next
                // swiper-slide-duplicate swiper-slide-duplicate-prev
                // $("#swiper_1").empty()
                // $("#swiper_1").html(
                //     '<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev swiper-slide-active">' +
                //     '    <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/1.jpg" alt="">' +
                //     '</div>'
                // )

                // $("#bodyModal").html(

                // )

            }).fail(function() {
                alert("error");
            })
        }
    </script>

    <!-- Global Vendor, plugins JS -->
    @include('layouts.scripts')
    @yield('add_script')
    @include('layouts.dialogs')
</body>

</html>
