@extends('base')
@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">{{ strtoupper($product->name) }}</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            @if (count($product->images) > 0)
                                @foreach ($product->images as $image)
                                    <div class="swiper-slide zoom-image-hover">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset(str_replace('product-image', 'product-image/zoom-image', $image->path)) }}"
                                            alt="">
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide zoom-image-hover">
                                    <img class="img-responsive m-auto"
                                        src="{{ asset('assets/images/product-image/none.jpg') }}" alt="">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs ">
                        <div class="swiper-wrapper">
                            @if (count($product->images) > 0)
                                @foreach ($product->images as $image)
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{ asset($image->path) }}" alt="">
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="{{ asset('assets/images/product-image/none.jpg') }}" alt="">
                                </div>
                            @endif


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2>{{ $product->name }}</h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                {!! $product->price ? '<li class="new-price">$' . $product->price . '</li>' : '' !!}
                                {!! $product->old_price ? '<li class="old-price"><del>$' . $product->old_price . '</del></li>' : '' !!}
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
                        <div class="stock mt-30px">
                            <span class="avallabillty">Availability: <span class="in-stock"><i
                                        class="fa fa-{{ $product->in_stock ? 'check' : 'ban' }}"></i>{{ $product->in_stock ? 'In' : 'Out Of' }}
                                    Stock</span></span>
                        </div>
                        <p class="mt-30px mb-0">{{ $product->short_desc }}</p>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" id="product_qty" type="text" name="qtybutton"
                                    value="1" />
                            </div>
                            <div class="pro-details-cart">
                                <button class="add-cart" {{ $product->in_stock ? '' : 'disabled' }}
                                    onclick="{{ 'addToCart(' . $product->id . ',"' . $product->name . '",' . $product->price . ')' }}">
                                    Add To
                                    Cart</button>
                            </div>
                            <div class="pro-details-cart">
                                <button {{ $product->in_stock ? '' : 'disabled' }} class="add-cart buy-button"> Buy It
                                    Now</button>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                @foreach ($product->categories as $category)
                                    <li>
                                        <a href="#">{{ $category->name . (!$loop->last ? ',' : '') }}</a>
                                    </li>
                                @endforeach
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
                            <a href="#"><img src="{{ asset('assets/images//icons/payment.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- product details description area start -->
    <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details2">Information</a>
                    <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                    <a data-bs-toggle="tab" href="#des-details3">Reviews (02)</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane">
                        <div class="product-anotherinfo-wrapper text-start">
                            <ul>
                                @foreach (explode(';', $product->infos) as $info)
                                    @php
                                        $line = explode('|', $info);
                                    @endphp
                                    <li><span>{{ $line[0] }}</span>{{ $line[1] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/review-image/1.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                    cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper
                                                    euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
                                        <div class="review-img">
                                            <img src="assets/images/review-image/2.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                    cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper
                                                    euismod vehicula.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        <form action="#">
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
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Name" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Email" type="email" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="Your Review" placeholder="Message"></textarea>
                                                        <button class="btn btn-primary btn-hover-color-primary "
                                                            type="submit" value="Submit">Submit</button>
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
        </div>
    </div>
    <!-- product details description area end -->

    <!-- Related product Area Start -->
    <div class="related-product-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center line-height-1">
                        <h2 class="title">Related Products</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
            <div class="new-product-slider swiper-container slider-nav-style-1 pb-100px">
                <div class="new-product-wrapper swiper-wrapper">
                    @foreach ($related_products as $related_product)
                        <div class="new-product-item swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <div class="thumb">
                                    <a href="{{ 'products/' . $related_product->id }}" class="image">
                                        <img src="{{ asset($related_product->images[0]->path) }}" alt="Product" />
                                        <img class="hover-image" src="{{ asset($related_product->images[0]->path) }}"
                                            alt="Product" />
                                    </a>
                                    <span class="badges">
                                        {!! $related_product->promo ? '<span class="sale">-' . $related_product->promo_percent . '%</span>' : '' !!}
                                        {!! $related_product->new ? '<span class="new">New</span>' : '' !!}
                                        {!! $related_product->best_sale ? '<span class="new">Sale</span>' : '' !!}
                                    </span>
                                    <div class="actions">
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="pe-7s-like"></i></a>
                                        <a href="#" class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="pe-7s-look"></i></a>
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
                                            href="/products/{{ $related_product->id }}">{{ $related_product->name }}</a>
                                    </h5>
                                    <span class="price">
                                        {!! $related_product->price ? '<span class="new">$' . $related_product->price . '</span>' : '' !!}
                                        {!! $related_product->old_price ? '<span class="old">$' . $related_product->old_price . '</span>' : '' !!}
                                    </span>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Add
                                    To Cart</button>
                            </div>
                            <!-- Single Prodect -->
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
    </div>
    <!-- Related product Area End -->
@endsection
@section('add_script')
    <script>
        function addToCart(prd_id, prd_name, prd_price) {
            let prd_qty = $("#product_qty").val()

            // console.log(prd_id);
            // console.log(prd_name);
            // console.log(prd_qty);
            // console.log(prd_price);

            $.ajax({
                url: '/add_to_cart',
                type: 'post',
                data: {
                    prd_id,
                    prd_name,
                    prd_qty,
                    prd_price
                }
            }).success(res => {
                console.log(res);
            }).fail(res => {
                console.log(res);
            })
        }
    </script>
@endsection
