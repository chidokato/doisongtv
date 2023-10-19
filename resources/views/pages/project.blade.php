@extends('layout.index')

@section('title') {{$post->title ? $post->title : $post->name}} @endsection
@section('description') {{$post->description ? $post->description : $post->name.$post->name}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<style type="text/css">
    .navigation-thumbs{ margin-top: 5px; margin-bottom: 5px;}
    .navigation-thumbs img{ height: 100px !important }
    .info-project ul{ padding-left: 20px }
    .info-project ul li, .info-project p{line-height: 1.4rem; margin-bottom: 0.5rem; list-style: circle; }
    h1.listing-title {
        font-size: 1.4rem;
        line-height: 48px;
        color: var(--theme-primary-color);
    }
    .hotline i{ margin-right: 5px; margin-left: 13px; }
    .hotline{ border: 1px solid #ddd; border-radius: 15px; background: var(--theme-primary-color); color: #fff !important; }
    .menuproject-tab{ display: flex; justify-content: space-between; }
    .project_slider .owl-dots{ position: absolute;margin-left: auto;margin-right: auto;left: 0;right: 0;text-align: center; bottom: 33px; }
    .project_slider .item img{ height: auto !important; }
</style>
@endsection

@section('content')
<?php use App\Models\Images; ?>
<div id="page_wrapper" class="project">
@include('layout.header_page')

<div class="full-row property-overview pb-2 mb-2 menuproject">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{asset('')}}">{{__('lang.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{$catslug}}">{{$post->CategoryTranslation->name}}</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">{{$post->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="full-row p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 px-0">
                <div id="sync1" class="slider owl-carousel">
                    <div class="item">
                        <img class="lazyload" data-src="data/product/{{$post->post->img}}" alt="real estate template">
                    </div>
                    @foreach($images as $val)
                    <div class="item">
                        <img class="lazyload" data-src="data/product/detail/{{$val->img}}" alt="real estate template">
                    </div>
                    @endforeach
                </div>
                <div id="sync2" class="navigation-thumbs owl-carousel">
                    <div class="item">
                        <img class="lazyload" data-src="data/product/{{$post->post->img}}" alt="real estate template">
                    </div>
                    @foreach($images as $val)
                    <div class="item">
                        <img class="lazyload" data-src="data/product/detail/{{$val->img}}" alt="real estate template">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="property-overview  summary rounded  mb-0">
                    <div class="">
                        <div class="col-auto">
                            <!-- <div class="post-meta font-small text-uppercase list-color-primary">
                                <a href="{{$post->CategoryTranslation->category->slug}}" class="listing-ctg"><i class="fa-solid fa-building"></i><span>{{$post->CategoryTranslation->name}}</span></a>
                            </div> -->
                            <h1 class="listing-title">{{$post->name}}</h1>
                            <span class="listing-location"><i class="fas fa-map-marker-alt text-primary"></i> {{$post->address}}, {{$post->WardTranslation->name}}, {{$post->DistrictTranslation->name}}, {{$post->ProvinceTranslation->name}}</span>
                        </div>
                        <div class="col-auto ms-auto xs-m-0 xs-text-start pb-2 mt-2">
                            @if($post->price)
                            <span class="listing-price"><span>Giá bán </span>{{$post->price}} {{$post->unit}}</span>
                            @else
                            <span class="listing-price"><span>Giá bán </span>Liên hệ</span>
                            @endif
                        </div>
                        <div class="info-project">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="full-row p-0 menuproject sicky-70">
    <div class="container menuproject-tab">
        <ul>
            @foreach($section as $val)
            <li><a href="#tab{{$val->id}}">{{$val->name}}</a></li>
            @endforeach
            
        </ul>
        <ul>
            <li><a class="hotline" href="tel:1800646428"><i class="fa fa-phone"></i> 1800.64.64.28</a></li>
        </ul>
    </div>
</div>

<div class="full-row pt-0 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 order-xl-1">
                @foreach($section as $val)
                <div class="property-overview summary rounded bg-white mb-20">
                    <div class="row row-cols-1">
                        <div class="col">
                            <h2 id="tab{{$val->id}}" class="heading-title">{{$val->header}}</h2>
                            <div class="content">
                                {!! $val->content !!}
                            </div>
                        </div>
                        <?php $images = Images::where('section_id',$val->section_id)->get(); ?>
                        @if(count($images) > 1)
                        <div class="owl-carousel owl-theme project_slider mt-3">
                            @foreach($images as $key => $img)
                            @if($key==0)
                            <div class="item"><img src="data/product/detail/{{$img->img}}"></div>
                            @else
                            <div class="item"><img class="lazyload" data-src="data/product/detail/{{$img->img}}"></div>
                            @endif
                            @endforeach
                        </div>
                        @else
                            @foreach($images as $key => $img)
                            <div class="mt-3">
                                <img class="lazyload" data-src="data/product/detail/{{$img->img}}">
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-xl-4 order-xl-2">
                <!--============== Recent Property Widget Start ==============-->
                <div class="widget widget_recent_property">
                    <h5 class="text-secondary mb-4">Dự án liên quan</h5>
                    <ul>
                        @foreach($related_post as $val)
                        <li>
                            <img class="lazyload" data-src="data/product/{{$val->Post->img}}" alt="">
                            <div class="thumb-body">
                                <h6 class="listing-title line-1"><a href="property-single-1.html">{{$val->name}}</a></h6>
                                <span class="listing-price"><small>Giá bán: </small> {{$val->price ? $val->price:'Liên hệ'}}</span>
                                <ul class="d-flex quantity font-fifteen">
                                    <li class="line-1"><span><i class="fas fa-map-marker-alt"></i></span>{{$val->WardTranslation->name}}, {{$val->DistrictTranslation->name}}, {{$val->ProvinceTranslation->name}}</li>

                                </ul>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!--============== Recent Property Widget End ==============-->

                <div class="widget widget_contact bg-white border p-30 shadow-one rounded mb-30 sicky-120">
                    <h5 class="mb-4">Quản lý dự án</h5>
                    <div class="media mb-3">
                        <img class="rounded-circle me-3 lazyload" style="width: 100px" data-src="frontend/assets/img/avata-TGD.png" alt="avata">
                        <div class="media-body">
                            <div class="h6 pb-0 m-0">Hằng Lee</div>
                            <span>Hotline: 0916 442 096</span><br>
                            <span>info@datxanhindochine.com</span>
                        </div>
                    </div>
                    <form class="quick-search form-icon-right" action="#" method="post">
                        <div class="form-row">
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
                                    <button class="btn btn-primary w-100">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="share-post border-0 px-0 d-flex">
            <span class="py-10"><b>Share:</b></span>
            <div class="media-widget-round-white-primary-shadow">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</div>



@include('layout.footer')
</div>
@endsection

@section('js')
<script type="text/javascript">
    var sync1 = $(".slider");
var sync2 = $(".navigation-thumbs");

var thumbnailItemClass = '.owl-item';

var slides = sync1.owlCarousel({
    video:true,
  startPosition: 12,
  items:1,
  loop:false,
  margin:3,
  autoplay:true,
  autoplayTimeout:6000,
  autoplayHoverPause:false,
  nav: false,
  dots: false
}).on('changed.owl.carousel', syncPosition);

function syncPosition(el) {
  $owl_slider = $(this).data('owl.carousel');
  var loop = $owl_slider.options.loop;

  if(loop){
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    if(current < 0) {
        current = count;
    }
    if(current > count) {
        current = 0;
    }
  }else{
    var current = el.item.index;
  }

  var owl_thumbnail = sync2.data('owl.carousel');
  var itemClass = "." + owl_thumbnail.options.itemClass;


  var thumbnailCurrentItem = sync2
  .find(itemClass)
  .removeClass("synced")
  .eq(current);

  thumbnailCurrentItem.addClass('synced');

  if (!thumbnailCurrentItem.hasClass('active')) {
    var duration = 100;
    sync2.trigger('to.owl.carousel',[current, duration, true]);
  }   
}
var thumbs = sync2.owlCarousel({
  startPosition: 0,
  items:6,
  loop:false,
  margin:5,
  autoplay:false,
  nav: false,
  dots: false,
  onInitialized: function (e) {
    var thumbnailCurrentItem =  $(e.target).find(thumbnailItemClass).eq(this._current);
    thumbnailCurrentItem.addClass('synced');
  },
})
.on('click', thumbnailItemClass, function(e) {
    e.preventDefault();
    var duration = 300;
    var itemIndex =  $(e.target).parents(thumbnailItemClass).index();
    sync1.trigger('to.owl.carousel',[itemIndex, duration, true]);
}).on("changed.owl.carousel", function (el) {
  var number = el.item.index;
  $owl_slider = sync1.data('owl.carousel');
  $owl_slider.to(number, 100, true);
});

</script>
@endsection