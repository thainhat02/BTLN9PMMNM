@extends('front.layout.master')

@section('title', 'Contact')

@section('body')
    <!-- Breadcrumb Section start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/index"><i class="fa fa-home"></i>Trang chủ</a>
                        <span>Liên tác</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section end -->

    <!-- Map Section begin -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14894.061937732886!2d105.746865!3d21.05206415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345457e292d5bf%3A0x20ac91c94d74439a!2sHanoi%20University%20of%20Industry!5e0!3m2!1sen!2s!4v1689858334730!5m2!1sen!2s" height="610" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Map Section end -->

    <!-- Contact Section begin -->
    <section class="contact-section spad">
        <section class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Liên hệ chúng tôi</h4>
                        <p>Nếu có câu hỏi cụ thể hoặc cấp thiết cần trợ giúp, Quý vị có thể liên hệ với chúng tôi qua email hoặc điện thoại. Chúng tôi sẽ cố gắng liên hệ lại với Quý vị trong vòng 24 giờ.</p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Địa chỉ: </span>
                                <p>298 Đ. Cầu Diễn, Minh Khai, Bắc Từ Liêm</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Điện thoại: </span>
                                <p>0123456789</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email: </span>
                                <p>thainhatx4@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Phản hồi</h4>
                            <p>Quý khách có thể để lại phản hồi tại đây</p>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Tên">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Phản hồi" name="" id="" cols="30" rows="10"></textarea>
                                        <button type="submit" class="site-btn">Gửi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Contact Section end -->
@endsection
