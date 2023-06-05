@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('content')

<div class="news pd-top-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h4 class="title left-line">{{$data->name}}</h4>
                </div>
                <div class="row">
                    @foreach($post as $val)
                    <div class="col-lg-4">
                        <div class="media-post-wrap">
                            <div class="thumb mb-2">
                                <a href="{{$val->category->slug}}/{{$val->slug}}"><img src="frontend/img/blog/business-people.jpg" alt="img"></a>
                                <a class="tag top-right tag-green" href="{{$val->category->slug}}">Travel</a>
                            </div>
                            <div class="media-body ms-0">
                                <h4><a href="{{$val->category->slug}}/{{$val->slug}}">In the news: small businesses for expect revenue growth in 2022.</a></h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="section-title">
                    <h4 class="title left-line">Don't Miss</h4>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')

@endsection