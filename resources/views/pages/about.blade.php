@extends('layout.index')

@section('title') Công Ty Cổ Phần Bất Động Sản Indochine @endsection
@section('description') Công Ty Cổ Phần Bất Động Sản Indochine là công ty thành viên của Đất Xanh Miền Bắc – đơn vị trực thuộc Tập Đoàn Đất Xanh @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('content')
<div id="page_wrapper" class="bg-light">
@include('layout.header_page')

<div class="page-banner-simple bg-secondary py-0" style="">
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h3 class="banner-title text-white">Chúng ta là ai ?</h3>
                <span class="banner-tagline font-medium text-white">Chúng tôi lập chiến lược, thiết kế & phát triển để tạo ra những sản phẩm có giá trị.</span>
            </div>
        </div>
    </div> -->
    <style type="text/css">
        .page-banner-simple{ margin-top: 70px; background: url(data/about/bg-news.jpg) no-repeat center center; height: 350px }
    </style>
</div>

<div class="full-row pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-secondary mb-5">
                            <span class="tagline-2 text-primary">{{__('lang.gt')}}</span>
                            <h2 class="text-secondary mb-4">{{__('lang.name')}}</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row row-cols-md-1 row-cols-1">
                            <div class="col border-start border-geay mb-5">
                                <div class="simple-thumb transation px-4">
                                    <h5 class="my-3"><a href="#" class="text-secondary">{{__('lang.gt1')}}</a></h5>
                                    <p>{{__('lang.gt2')}}</p>
                                    <p>{{__('lang.gt3')}}</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row paraxify" style="background-image: url(frontend/assets/img/bg-banlanhdao.jpg); background-repeat: no-repeat; background-position: center -12.97px; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="text-white">
                            <!-- <span class="tagline text-primary">PROUDLY LOCAL, GOING GLOBAL</span> -->
                            <h3 class="mb-4 text-white">{{__('lang.gt4')}}</h3>
                            <p>{{__('lang.gt5')}}</p>
                            <p>{{__('lang.gt6')}}</p>
                            <p>{{__('lang.gt7')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="full-row bg-light pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-secondary mb-lg-5">
                            <span class="tagline-2 text-primary">{{__('lang.gt8')}}</span>
                            <!-- <h2 class="text-secondary mb-4">GIÁ TRỊ CỐT LÕI</h2> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col px-0" style="display: flex; justify-content: flex-end; padding-bottom: 50px;"><img src="https://datxanhindochine.com/wp-content/uploads/2022/10/IMG-INTRODUCE.png" alt="image not found"></div>
                    <div class="col bg-white" style="margin-top: -100px;">
                        <div class="sm-px-0" style="padding:50px 80px">
                            <div class="simple-video-play d-flex mb-3">
                                <div class="position-relative d-inline-block">
                                    <a data-fancybox="" href="https://www.youtube.com/watch?v=bh-klGboIg8" class="rounded-circle position-relative bg-secondary" style="z-index: 10"><i class="flaticon-play-button position-relative xy-center flat-mini rounded-circle text-white"></i></a>
                                    <div class="loader position-absolute xy-center">
                                        <div class="loader-inner ball-scale-multiple">
                                            <div></div>
                                            <div></div>
                                        </div><span class="tooltip">
									  <b>ball-scale-multiple</b></span>
                                    </div>
                                </div>
                                <div class="ps-4 text-secondary font-medium">Play Video</div>
                            </div>

                            <h2 class="text-secondary mb-5">TẦM NHÌN & SỨ MỆNH</h2>
                            <div class="bb-accordion ac-single-show accordion-plus-left">
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate active" href="#">TẦM NHÌN</a>
                                    <div class="ac-collapse show" style="display: block;">
                                        <P>Trở thành đơn vị phân phối, cho thuê và quản lý các sản phẩm bất động sản năng động, linh hoạt tại Việt Nam & Quốc tế</P>
                                        <P>Trở thành đơn vị đi đầu trong “chuyển đổi số” và tạo ra các giá trị vượt trội</P>
                                        <p>Là đơn vị Dịch vụ môi giới và cho thuê được lựa chọn hàng đầu Việt Nam.</p>
                                    </div>
                                </div>
                                <div class="ac-card">
                                    <a class="ac-toggle text-dark text-truncate" href="#">SỨ MỆNH</a>
                                    <div class="ac-collapse">
                                        <p>Cung cấp sản phẩm và dịch vụ ưu việt, nâng cao chất lượng cuộc sống, gia tăng giá trị cho khách hàng và duy trì lợi nhuận đầu tư bền vững cho các cổ đông. Mang đến dịch vụ chuyên nghiệp và giải pháp hoàn hảo</p>
                                        <p>Tuân theo những chuẩn mực cao nhất về đạo đức trong kinh doanh và trách nhiệm xã hội, tạo niềm tự hào về một thương hiệu Bất động sản Việt Nam thành công.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row paraxify" style="background-image: url(frontend/assets/img/bg-banlanhdao.jpg); background-repeat: no-repeat; background-position: center -12.97px; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="text-secondary mb-lg-5">
                            <span class="tagline-2 text-white">INDOCHINE</span>
                            <h2 class="text-white mb-4">BAN LÃNH ĐẠO</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="info-tgd">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <img src="frontend/assets/img/avata-TGD.png">
                        </div>
                        <div class="col-xl-6 col-lg-6 tgd">
                            <div class="text-secondary">
                                <h3 class="mb-3 mt-5 text-secondary">LÊ THỊ HẰNG</h3>
                                <span class="tagline text-secondary">Tổng Giám Đốc</span>
                                <p>Với hơn 16 năm kinh nghiệm trong ngành bất động sản, đã từng đảm nhiệm vị trí lãnh đạo cấp cao tại nhiều tập đoàn lớn trong và ngoài nước như: Novaland, FLC Group, Đất Xanh Miền Bắc, Colliers International, HiBrand Vietnam,… Bà Lê Thị Hằng là người tiên phong đi đầu trong việc “xuất khẩu” bất động sản Việt Nam ra quốc tế. Công Ty Cổ Phần Bất Động Sản Indochine cũng là đơn vị đầu tiên và duy nhất tại Việt Nam cung cấp dịch vụ bất động sản chuyên nghiệp và toàn diện cho khách hàng nước ngoài.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme slider_banlanhdao banlanhdao mt-5">
                    <div class="item">
                        <div class="img">
                            <img src="frontend/assets/img/haianh.jpg">
                        </div>
                        <div class="info">
                            <h3>Nguyễn Hải Anh</h3>                            
                            <p>Giám Đốc Kinh Doanh</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="frontend/assets/img/lethithuy.jpg">
                        </div>
                        <div class="info">
                            <h3>Lê Thị Thu Thủy</h3>                            
                            <p>Trợ Lý Tổng Giám Đốc</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="frontend/assets/img/duc.jpg">
                        </div>
                        <div class="info">
                            <h3>Nguyễn Xuân Đức</h3>                            
                            <p>Trưởng Phòng Kinh Doanh</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="frontend/assets/img/hangvo.jpg">
                        </div>
                        <div class="info">
                            <h3>Võ Thị Diễm Hằng</h3>                            
                            <p>Giám đốc KD thị trường quốc tế</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="frontend/assets/img/nguyenhoa.jpg">
                        </div>
                        <div class="info">
                            <h3>Nguyễn Mậu Hòa</h3>                            
                            <p>Quản Lý Đại Lý</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

@include('layout.footer')
</div>
@endsection
@section('script')

@endsection