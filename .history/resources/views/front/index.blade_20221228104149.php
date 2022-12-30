@extends('front.layout.master')
@section('title', 'Trang chủ')
@section('body')
    <!--Hero Section Begin-->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, kids</span>
                            <h1>Black friday</h1>
                            <p>Lỏem</p>
                            <a href="#" class="primary-btn">Shop now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, kids</span>
                            <h1>Black friday</h1>
                            <p>Lỏem</p>
                            <a href="#" class="primary-btn">Shop now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero Section End-->

    <!--Banner section Begin-->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Nam</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Nam</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Nam</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner section End-->

    <!--WWomen banner begin-->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Nữ</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>

                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="women">Tất cả</li>
                            <li class="item" data-tag=".Clothing" data-category="women">Clothings</li>
                            <li class="item" data-tag=".Shoes" data-category="women">Shoes</li>
                            <li class="item" data-tag="." data-category="women">Shoes</li>
                            <li class="item" data-tag=".HanBag" data-category="women">HanBag</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        @foreach($womenProduct as $womenProduct)
                        <div class="product-item item {{$womenProduct->tag}}">
                            <div class="pi-pic">
                                <img src="front/img/products/{{$womenProduct->productImages[0]->path }}" alt="">
                                @if($womenProduct->discount != null)
                                    <div class="sale">Sale</div>
                                @endif

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Xem nhanh</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-ramdom"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">{{$womenProduct->tag}}</div>
                                <a href="#">
                                    <h5>{{$womenProduct->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($womenProduct->discount != null)
                                        {{$womenProduct->discount}}
                                        <span>{{$womenProduct->price}}</span>
                                    @else
                                        {{$womenProduct->price}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--WWomen banner end-->

    <!--Deal of the week begin-->
    <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal of week</h2>
                    <p>Deal <br /> of weeek</p>
                    <div class="product-price">
                        35.000
                        <span>/ Bag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>46</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>46</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>46</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>46</span>
                        <p>Days</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop now</a>
            </div>
        </div>
    </section>
    <!--Deal of the week end-->

    <!--Man banner section begin-->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="men">Tất cả</li>
                            <li class="item" data-tag=".Clothings" data-category="men">Clothings</li>
                            <li class="item" data-tag=".Shoes" data-category="men">Shoes</li>
                            <li class="item" data-tag=".Shoes" data-category="men">Shoes</li>
                            <li class="item" data-tag=".Bags" data-category="men">Bags</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach($menProduct as $menProduct)
                        <div class="product-item item {{$menProduct->tag}}">
                            <div class="pi-pic">
                                <img src="front/img/products/{{$menProduct->productImages[0]->path }}" alt="">
                                @if($menProduct->discount != null)
                                    <div class="sale">Sale</div>
                                @endif

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Xem nhanh</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-ramdom"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">{{$menProduct->tag}}</div>
                                <a href="#">
                                    <h5>{{$menProduct->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($menProduct->discount != null)
                                        {{$menProduct->discount}}
                                        <span>{{$menProduct->price}}</span>
                                    @else
                                        {{$menProduct->price}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Nam</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Man banner section end-->

@endsection
