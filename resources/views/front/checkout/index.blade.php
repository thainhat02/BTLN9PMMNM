@extends('front.layout.master')

@section('title', 'Checkout')

@section('body')
    <!-- Breadcrumb Section start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i>Trang chủ</a>
                        <a href="/shop">Sản phẩm</a>
                        <a href="/cart">Giỏ hàng</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section end -->

    <!-- Checkout Section begin -->
    <div class="checkout-section spad">
        <div class="container">
            <form action="" method="post" class="checkout-form">
                @csrf
                <div class="row">
                    @if(Cart::count() > 0)
                    <div class="col-lg-6">
                        @if(!Auth::user())
                        <div class="checkout-content">
                            <a href="/account/login" class="content-btn login-checkout">Đăng nhập</a>
                        </div>
                        @endif
                        <h4>Chi tiết hóa đơn</h4>
                        <div class="row">

                            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id ?? ''}}">

                            <div class="col-lg-6">
                                <label for="fname">Họ<span>*</span></label>
                                <input required type="text" name="first_name" id="fname" value="{{Auth::user()->name ?? ''}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="lname">Tên<span>*</span></label>
                                <input required type="text" name="last_name" id="lname" value="{{Auth::user()->lastname ?? ''}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="cpnname">Tên công ty</label>
                                <input type="text" name="company_name" id="cpnname" value="{{Auth::user()->company_name ?? ''}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="ctr">Quốc gia<span>*</span></label>
                                <input required type="text" name="country" id="ctr" value="{{Auth::user()->country ?? ''}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="str">Địa chỉ<span>*</span></label>
                                <input required type="text" name="street_address" id="str" class="street-first" value="{{Auth::user()->street_address ?? ''}}">
                                <label for="postcode">Mã bưu điện<span>*</span></label>
                                <input required type="text" name="postcode_zip" id="postcode" value="{{Auth::user()->postcode_zip ?? ''}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Thành phố<span>*</span></label>
                                <input required type="text" name="town_city" id="town" value="{{Auth::user()->town_city ?? ''}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email <span>*</span></label>
                                <input required type="text" name="email" id="email" value="{{Auth::user()->email ?? ''}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Điện thoại<span>*</span></label>
                                <input required type="text" name="phone" id="phone" value="{{Auth::user()->phone ?? ''}}">
                            </div>
                            @if(!Auth::user())
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Cần 1 tài khoản mới
                                        <input type="checkbox" name="" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="place-order">
                            <h4>Chi tiết đơn hàng</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Sản phẩm <span>Giá</span></li>

                                    @foreach($cartItems as $cartItem)
                                    <li class="fw-normal">
                                        {{$cartItem->name}} x {{$cartItem->qty}}
                                        <span>${{number_format($cartItem->price * $cartItem->qty, 2)}}</span>
                                    </li>
                                    @endforeach

                                   
                                    <li class="total-price">Tổng tiền<span>${{$total}}</span></li>
                                </ul>
                                <div class="checkout-content coupon-input">
                                    <input type="text" placeholder="Nhập mã giảm giá" name="" id="">
                                </div>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-cod">
                                            Thanh toán khi nhận hàng
                                            <input type="radio" name="payment_type" value="cod" id="pc-cod" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-vnpay">
                                            VN PAY
                                            <input type="radio" name="payment_type" value="vnpay" id="pc-vnpay">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="col-lg-12">
                        <h4>Giỏ hàng của bạn đang trống. Mua sản phẩm <a style="" href="/shop">tại đây</a>!</h4>
                    </div>
                @endif
            </form>
        </div>
    </div>
    <!-- Checkout Section end -->
@endsection
