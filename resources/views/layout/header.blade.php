<?php use App\Models\Category; ?>
<!--============== Header Section Start ==============-->
<header class="header-style-1 nav-on-banner fixed-bg-secondary">
    <div class="main-nav">
        <div class="container"> 
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-line-active">
                        <a class="navbar-brand" href="{{asset('')}}"><img class="nav-logo" src="frontend/assets/img/indochine_logo_{{Session::get('locale')}}.png" alt="logo indochine"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                          </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item active"> <!--  -->
                                    <a class="nav-link" href="{{asset('')}}">{{__('lang.home')}}</a>
                                </li>
                                @foreach($category as $val)
                                <?php $subcats = Category::where('parent', $val->id)->get(); ?>
                                @if(count($subcats) > 0)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{$val->slug}}">{{$val->name}}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($subcats as $subcat)
                                        <li><a class="dropdown-item" href="{{$subcat->slug}}">{{$subcat->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{$val->slug}}">{{$val->name}}</a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                            <!-- <a href="#" class="btn btn-primary add-listing-btn">+ Create Listing</a> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--============== Header Section End ==============-->