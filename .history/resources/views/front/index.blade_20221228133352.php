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
                            <li class="item" data-tag=".Clothing" data-category="women">Clothing</li>
                            <li class="item" data-tag=".Shoes" data-category="women">Shoes</li>
                            <li class="item" data-tag=".HandBag" data-category="women">HandBag</li>
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
                            <li class="item" data-tag=".Clothing" data-category="men">Clothing</li>
                            <li class="item" data-tag=".Shoes" data-category="men">Shoes</li>
                            <li class="item" data-tag=".HandBag" data-category="men">HandBag</li>
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

    <!--Instagram section begin-->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shop_Collections</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shop_Collections</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shop_Collections</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shop_Collections</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shop_Collections</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Shop_Collections</a></h5>
            </div>
        </div>
    </div>
    <!--Instagram section end-->

    <!--Latest Section Begin-->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                       <h2>From blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-blog">
                            <img src="front/img/{{}}" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        May 4, 2022
                                    </div>
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        5
                                    </div>
                                </div>
                                <a href="">
                                <h4>The besst shop</h4>
                                </a>
                                <p>Shome test the best 1</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>
                                    Free shipping
                                </h6>
                                <p>For all order over 99.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>
                                    Free shipping
                                </h6>
                                <p>For all order over 99.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>
                                    Free shipping
                                </h6>
                                <p>For all order over 99.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Latest Section end-->

@endsection
