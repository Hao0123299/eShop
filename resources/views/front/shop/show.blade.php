@extends('front.layout.master')
@section('title', 'Product');
@section('body')



    <!--Breadcrumb section begin-->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <a href="shop.html">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section end-->

    <!--Product Shop Section Begin-->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('front.shop.components.products-sidebar-filter')
{{--                    <div class="filter-widget">--}}
{{--                        <h4 class="fw-title">Categories</h4>--}}
{{--                        <ul class="filter-catagories">--}}
{{--                            <li><a href="#">Men</a></li>--}}
{{--                            <li><a href="#">Women</a></li>--}}
{{--                            <li><a href="#">Kids</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="filter-widget">--}}
{{--                        <h4 class="fw-title">Brand</h4>--}}
{{--                        <div class="fw-brand-check">--}}
{{--                            <div class="bc-item">--}}
{{--                                <label for="bc-calvin">--}}
{{--                                    Calvin Klein--}}
{{--                                    <input type="checkbox" id="bc-calvin">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="bc-item">--}}
{{--                                <label for="bc-calvin">--}}
{{--                                    Calvin Klein--}}
{{--                                    <input type="checkbox" id="bc-calvin">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="bc-item">--}}
{{--                                <label for="bc-calvin">--}}
{{--                                    Calvin Klein--}}
{{--                                    <input type="checkbox" id="bc-calvin">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="filter-widget">--}}
{{--                        <h4 class="fw-title">Price</h4>--}}
{{--                        <div class="filter-range-wrap">--}}
{{--                            <div class="range-slider">--}}
{{--                                <div class="price-input">--}}
{{--                                    <input type="text" id="minamount">--}}
{{--                                    <input type="text" id="maxamount">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33"--}}
{{--                                data-max="98">--}}
{{--                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>--}}
{{--                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>--}}
{{--                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="filter-btn"> Filter</a>--}}
{{--                    </div>--}}
{{--                    <div class="filter-widget">--}}
{{--                        <h4 class="fw-title">Color</h4>--}}
{{--                        <div class="fw-color-choose">--}}
{{--                            <div class="cs-item">--}}
{{--                                <input type="radio" id="cs-black">--}}
{{--                                <label class="cs-black" for="cs-black">black</label>--}}
{{--                            </div>--}}
{{--                            <div class="cs-item">--}}
{{--                                <input type="radio" id="cs-violet">--}}
{{--                                <label class="cs-violet" for="cs-violet">violet</label>--}}
{{--                            </div>--}}
{{--                            <div class="cs-item">--}}
{{--                                <input type="radio" id="cs-blue">--}}
{{--                                <label class="cs-blue" for="cs-blue">blue</label>--}}
{{--                            </div>--}}
{{--                            <div class="cs-item">--}}
{{--                                <input type="radio" id="cs-red">--}}
{{--                                <label class="cs-red" for="cs-red">red</label>--}}
{{--                            </div>--}}
{{--                            <div class="cs-item">--}}
{{--                                <input type="radio" id="cs-yellow">--}}
{{--                                <label class="cs-yellow" for="cs-yellow">yellow</label>--}}
{{--                            </div>--}}
{{--                            <div class="cs-item">--}}
{{--                                <input type="radio" id="cs-green">--}}
{{--                                <label class="cs-green" for="cs-green">green</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="filter-widget">--}}
{{--                        <h4 class="fw-title">Size</h4>--}}
{{--                        <div class="fw-size-choose">--}}
{{--                            <div class="sc-item">--}}
{{--                                <input type="radio" id="s-size">--}}
{{--                                <label for="s-size">S</label>--}}
{{--                            </div>--}}
{{--                            <div class="sc-item">--}}
{{--                                <input type="radio" id="m-size">--}}
{{--                                <label for="m-size">M</label>--}}
{{--                            </div>--}}
{{--                            <div class="sc-item">--}}
{{--                                <input type="radio" id="l-size">--}}
{{--                                <label for="l-size">L</label>--}}
{{--                            </div>--}}
{{--                            <div class="sc-item">--}}
{{--                                <input type="radio" id="xl-size">--}}
{{--                                <label for="xl-size">XL</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="filter-widget">--}}
{{--                        <h4 class="fw-title">Tags</h4>--}}
{{--                        <div class="fw-tags">--}}
{{--                            <a href="#">Towel</a>--}}
{{--                            <a href="#">Towel</a>--}}
{{--                            <a href="#">Towel</a>--}}
{{--                            <a href="#">Towel</a>--}}
{{--                            <a href="#">Towel</a>--}}
{{--                            <a href="#">Towel</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="front/img/products/{{$product->productImages[0]->path}}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    @foreach($product->productImages as $productImage)
                                        <div class="pt active" data-imgbigurl="front/img/products/{{$productImage->path}}">
                                            <img src="front/img/products/{{$productImage->path}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>{{$product->tag}}</span>
                                    <h3>{{$product->name}}</h3>
                                    <a href="#" class="heart_icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $product->avgRating)
                                            <i class="fa fa-star"></i>
                                        @else
                                            <i class="fa fa-star-o"></i>
                                        @endif
                                    @endfor
                                    <span>({{ count($product->productComments) }})</span>
                                </div>
                                <div class="pd-desc">
                                    <p>{{$product->content}}</p>
                                    @if($product->discount != null)
                                        <h4>{{$product->discount}}<span>{{$product->price}}</span></h4>
                                    @else
                                        <h4>{{$product->price}}</h4>
                                    @endif
                                </div>
                                <div class="pd-color">
                                    <h6>M??u</h6>
                                    <div class="pd-color-choose">
                                        @foreach(array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                                            <div class="cc-item">
                                                <input type="radio" id="cc-{{$productColor}}">
                                                <label for="cc-{{$productColor}}" class="cc-{{$productColor}}"></label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    @foreach(array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                        <div class="sc-item">
                                            <input type="radio" id="sm-{{$productSize}}">
                                            <label for="sm-{{$productSize}}" class="{{$productSize}}">{{$productSize}}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                        <a href="#" class="primary-btn pd-cart">Th??m gi??? h??ng</a>
                                    </div>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>: {{$product->productCategory->name}}</li>
                                    <li><span>TAGS</span>: {{$product->tag}}</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">{{$product->sku}}</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">M?? t???</a></li>
                                <li><a href="#tab-2" data-toggle="tab" role="tab">Chi ti???t</a></li>
                                <li><a href="#tab-3" data-toggle="tab" role="tab">????nh gi?? kh??ch h??ng ({{ count($product->productComments) }})</a></li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                       {!! $product->description !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">
                                                    Kh??ch h??ng ????nh gi??
                                                </td>
                                                <td>
                                                    <div class="pd-rating">
                                                        @for($i = 1; $i <= 5; $i++)
                                                            @if($i <= $product->avgRating)
                                                                <i class="fa fa-star"></i>
                                                            @else
                                                                <i class="fa fa-star-o"></i>
                                                            @endif
                                                        @endfor
                                                        <span>({{ count($product->productComments) }})</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">
                                                    Gi??
                                                </td>
                                                <td>
                                                    <div class="p-price">
                                                        {{ $product->price }}
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Th??m gi??? h??ng</td>
                                                <td>
                                                    <div class="cart-add">Th??m gi??? h??ng</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Kho</td>
                                                <td>
                                                    <div class="p-stock">{{ $product->qty }} s???n ph???m</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">C??n n???ng</td>
                                                <td>
                                                    <div class="p-weight">{{ $product->weight }} Kg</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Size</td>
                                                <td>
                                                    <div class="p-size">
                                                        @foreach(array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                                            {{ $productSize }}
                                                        @endforeach
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">M??u</td>
                                                <td>
                                                    <div class="cs-color">
                                                        @foreach(array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                                                            <span class="cs-{{ $productColor }}"></span>
                                                        @endforeach
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">M?? s???n ph???m</td>
                                                <td>
                                                    <div class="p-code">
                                                        {{ $product->sku }}
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>{{ count($product->productComments) }} B??nh lu???n</h4>
                                        <div class="comment-option">
                                            @foreach($product->productComments as $productComment)
                                                <div class="co-item">
                                                    <div class="avatar-pic">
                                                        <img src="front/img/user/{{ $productComment->user->avatar ?? 'default-avatar.jpg' }}" alt="">
                                                    </div>
                                                    <div class="avatar-text">
                                                        <div class="at-rating">
                                                            @for($i = 1; $i <= 5; $i++)
                                                                @if($i <= $product->avgRating)
                                                                    <i class="fa fa-star"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            @endfor
                                                        </div>
                                                        <h5>{{ $productComment->name }}<span> {{ date('M d, Y', strtotime($productComment->created_at)) }}</span></h5>
                                                        <div class="at-reply">{{ $productComment->messages }}</div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="leave-comment">
                                            <h4>????nh gi??</h4>
                                            <form action="" method="post" class="comment-form">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" name="name" placeholder="H??? v?? t??n">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea name="messages" placeholder="B??nh lu???n"></textarea>
                                                        <div class="personal-rating">
                                                            <h6>????nh gi?? sao</h6>
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rating" value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" id="star4" name="rating" value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" id="star3" name="rating" value="3" />
                                                                <label for="star3" title="text">3 stars</label>
                                                                <input type="radio" id="star2" name="rating" value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" id="star1" name="rating" value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="site-btn">G???i</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product Shop Section End-->

    <!--Related product section begin-->
{{--    <div class="related-product spad">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <h2>S???n ph???m li??n quan</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                @foreach($relatedProducts as $product)--}}
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="product-item">--}}
{{--                            <div class="pi-pic">--}}
{{--                                <img src="front/img/products/{{ $product->productImage[0]->path }}" alt="">--}}
{{--                                @if($product->discount != null)--}}
{{--                                    <div class="sale pp-sale">Sale</div>--}}
{{--                                @endif--}}
{{--                                <div class="icon">--}}
{{--                                    <i class="icon_heart_alt"></i>--}}
{{--                                </div>--}}
{{--                                <ul>--}}
{{--                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>--}}
{{--                                    <li class="quick-view"><a href="shop/product/{{ $product->id }}">Xem nhanh</a></li>--}}
{{--                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="pi-text">--}}
{{--                                <div class="catagory-name">{{ $product->tag }}</div>--}}
{{--                                <a href="shop/product/{{ $product->id }}">--}}
{{--                                    <h5>{{ $product->name }}</h5>--}}
{{--                                </a>--}}
{{--                                <div class="product-price">--}}
{{--                                    @if($product->discount != null)--}}
{{--                                        {{ $product->discount }}--}}
{{--                                        <span>{{ $product->price }}</span>--}}
{{--                                    @else--}}
{{--                                        <span>{{ $product->price }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--Related product section end-->


@endsection
