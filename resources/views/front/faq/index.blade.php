@extends('front.layout.master')

@section('title', 'FAQ')

@section('body')
    <!-- Breadcrumb Section start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/index"><i class="fa fa-home"></i>Trang chủ</a>
                        <span>FAQ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section end -->

    <div class="faq-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-accordin">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        Câu hỏi #1
                                    </a>
                                </div>
                                <div class="collapse show" id="collapseOne" data-parrent="accordionExample">
                                    <div class="card-body">
                                        <p>Thời điểm đọc sách tốt nhất là khi nào?</p>
                                    </div>
                                </div>
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        Trả lời
                                    </a>
                                </div>
                                <div class="collapse show" id="collapseOne" data-parrent="accordionExample">
                                    <div class="card-body">
                                        <p>Buổi sáng khoảng 8-9 giờ<br>

                                            Buổi sáng là khoảng thời gian não chúng ta hoạt động tỉnh táo nhất vì đã được nghỉ ngơi sau một đêm dài. Chỉ cần 1 tiếng đọc sách vào mỗi buổi sáng chắc chắn là liều thuốc tốt nhất cho bản thân cảm thấy thư giãn và an tĩnh sau 1 tuần học tập làm việc bận rộn.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        Câu hỏi #2
                                    </a>
                                </div>
                                <div class="collapse show" id="collapseOne" data-parrent="accordionExample">
                                    <div class="card-body">
                                        <p>Đọc sách như thế nào để có hiệu quả?</p>
                                    </div>
                                </div>
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        Trả lời
                                    </a>
                                </div>
                                <div class="collapse show" id="collapseOne" data-parrent="accordionExample">
                                    <div class="card-body">
                                        <p>Không đọc lùi: Cho dù bạn không hiểu câu đã đọc thì cũng không nên đọc lùi lại, mà hãy đọc hết trang và hoặc hết một phân khúc rồi hãy nghiền ngẫm và suy nghĩ, không hiểu thi hãy đọc lại nếu thực sự cần thiết.<br>

                                            Đọc thầm: Trong quá trình đọc nên tạo nhịp để không bị phát ra âm, âm thanh không phát ra khỏi cổ họng của mình khi đọc sách sẽ hay hơn rất nhiều. Khi thấy tốc độ đọc bị nhanh hoặc chậm lại thì bạn cần phải luyện lại để có thể cải thiện tốc độ đọc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        Câu hỏi #3
                                    </a>
                                </div>
                                <div class="collapse show" id="collapseOne" data-parrent="accordionExample">
                                    <div class="card-body">
                                        <p>Chọn sách đọc như thế nào?</p>
                                    </div>
                                </div>
                                <div class="card-heading active">
                                    <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                        Trả lời
                                    </a>
                                </div>
                                <div class="collapse show" id="collapseOne" data-parrent="accordionExample">
                                    <div class="card-body">
                                        <p>Tùy thuộc vào sở thích, nhu cầu và mối quan tâm mà mỗi người sẽ chọn đọc các loại sách khác nhau. Trẻ con đọc sách để khám phá thế giới, để hình thành thói quen, sở thích đọc và để phát triển bản thân. Người lớn đọc sách để cập nhật kiến thức chuyên môn, để tiếp nhận thông tin về xã hội và để giải trí.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
