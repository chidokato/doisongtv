@extends('layout.index')

@section('title') Công Ty Cổ Phần Bất Động Sản Indochine @endsection
@section('description') Công Ty Cổ Phần Bất Động Sản Indochine là công ty thành viên của Đất Xanh Miền Bắc - UY TÍN số 1 thị trường BĐS Việt Nam @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('content')
<div class="full-row p-0 overflow-hidden bg-light">
    <div class="owl-carousel owl-theme home_slider">
        <div class="item"><img alt="slide" src="https://datxanhindochine.com/data/home/z4537714783472_5c013a91df8d09e821e0f37d8c9e9f4f.jpg"></div>
    </div>

    <div class="container"> 
        <div class="row">
            <div class="col">
                <form class="banner-search-form shadow-sm bg-white mb-3 quick-search form-icon-right position-relative" action="#" method="post" style="margin-top: -130px; z-index: 1">
                    <div class="row row-cols-lg-4 row-cols-md-4 row-cols-1 g-4">
                        <div class="col">
                            <input type="text" class="form-control" name="keyword" placeholder="{{__('lang.text1')}}...">
                        </div>
                        <div class="col">
                            <select class="form-control select2">
                                <option>-- asdasd --</option>
                                <option>asdasd</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-control select2">
                                <option>-- asdasd --</option>
                                <option>asdasd</option>
                            </select>
                        </div>
                        
                        <div class="col">
                            <button class="btn btn-primary w-100">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- =============== Counting ================-->


@endsection

@section('script')

@endsection