@extends('base')
@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Cart</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Cart Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">

                @if (Cart::count() > 0)
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="{{ route('update_cart') }}" method="POST">
                            @csrf
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::content() as $prd)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img class="img-responsive ml-15px"
                                                            src="{{ asset($prd->options->image) }}" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a
                                                        href="{{ 'products/' . $prd->id }}">{{ $prd->name }}</a></td>
                                                <td class="product-price-cart"><span
                                                        class="amount">${{ $prd->price }}</span>
                                                </td>
                                                <input type="hidden" name="prd_row_id" value="{{ $prd->rowId }}">
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input id="prd_qty" class="cart-plus-minus-box" type="number"
                                                            min="1" max="100" name="prd_qty"
                                                            value="{{ $prd->qty }}" required />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">${{ $prd->subtotal }}</td>
                                                <td class="product-remove">
                                                    {{-- <a href="#"><i class="fa fa-pencil"></i></a> --}}
                                                    <a href="/remove_from_cart/{{ $prd->rowId }}"><i
                                                            class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="/shop">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button type="submit">Update Shopping Cart</button>
                                            <a href="/clear_cart">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    * Country
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>??land Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Region / State
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>??land Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select mb-25px">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text" />
                                            </div>
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have one.</p>
                                        <form>
                                            <input type="text" required="" name="name" />
                                            <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-md-30px">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>
                                    <h5>Sub total products <span>${{ Cart::subtotal() }}</span></h5>
                                    <h5>Tax <span>${{ Cart::tax() }}</span></h5>
                                    {{-- <h5>Total products <span>${{ Cart::total() }}</span></h5> --}}
                                    {{-- <div class="total-shipping">
                                        <h5>Total shipping</h5>
                                        <ul>
                                            <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                            <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                        </ul>
                                    </div> --}}
                                    <h4 class="grand-totall-title">Grand Total <span>${{ Cart::total() }}</span></h4>
                                    <a href="/checkout">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        There is no product, <a href="/shop">click here</a> to add new one.
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Cart Area End -->
@endsection
