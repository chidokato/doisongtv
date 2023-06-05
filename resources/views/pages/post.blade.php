@extends('layout.index')

@section('title') {{$post->title ? $post->title : $post->name}} @endsection
@section('description') {{$post->description ? $post->description : $post->name.$post->name}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('content')

<div class="post pd-top-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h4 class="title left-line">{{$post->name}}</h4>
                </div>
                <div class="content">
                    {!!$post->content!!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title">
                    <h4 class="title left-line"></h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

@endsection