@extends('layout.index')

@section('title') Công Ty Cổ Phần Bất Động Sản Indochine @endsection
@section('description') Tầng 1, toà CT4-Vimeco (cạnh siêu thị Vinmart), Nguyễn Chánh, P. Trung Hoà Nhân Chính, Q. Cầu Giấy, HN @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('content')
<div id="page_wrapper" class="bg-light">
    
@include('layout.header_page')
<div class="full-row pt-0 pb-0">
    <div class="owl-carousel owl-theme home_slider" style="margin-top: 70px;">
        <div class="item">
            <div class="img"><img src="frontend/assets/img/bg-lienhe.png"></div>
        </div>
    </div>
</div>

<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="down-line mb-4">BẤT ĐỘNG SẢN INDOCHINE</h4>
                <!-- <p>Nullam vel enim risus. Integer rhoncus hendrerit sem egestas porttitor.</p> -->
                <div class="mb-3">
                    <ul>
                        <li class="mb-3">
                            <h6 class="mb-0">Trụ sở chính:</h6> Tầng 5, tòa nhà Vạn Gia Phát, Số 1 Trần Khánh Dư, Phường Tân Định, Quận 1, Thành phố Hồ Chí Minh
                        </li>
                        <li class="mb-3">
                            <h6 class="mb-0">Văn Phòng Hà Nội:</h6> Tầng 1, toà CT4-Vimeco (cạnh siêu thị Vinmart), Nguyễn Chánh, P. Trung Hoà Nhân Chính, Q. Cầu Giấy, HN
                        </li>
                        <li class="mb-3">
                            <h6>Contact Number :</h6> <a href="tel:1800646428">1800.64.64.28</a>
                        </li>
                        <li class="mb-3">
                            <h6>Email Address :</h6> datxanhindochine@dxmb.vn
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <form class="form-icon-right" action="#" method="post">
                    <div class="row">
                        <div class="col-12 mb-10">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-12 mb-10">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-12 mb-10">
                            <div class="form-group mb-0">
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <button class="btn btn-primary w-100">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="full-row pb-0 pt-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14898.33021871264!2d105.7931536!3d21.0093642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad450d6721ad%3A0x48876936f338b6db!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gQuG6pXQgxJDhu5luZyBT4bqjbiBJbmRvY2hpbmU!5e0!3m2!1svi!2s!4v1686556528861!5m2!1svi!2s" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@include('layout.footer')
</div>
@endsection
@section('script')

@endsection