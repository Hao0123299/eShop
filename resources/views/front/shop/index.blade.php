@extends('front.layout.master')
@section('title', 'Shop');
@section('body')

    <!--Breadcrumb section begin-->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section begin-->

    <!--product shop section begin-->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 products-sidebar-filter">
                    @include('front.shop.components.products-sidebar-filter')
{{--                    <form action="shop">--}}
{{--                        <div class="filter-widget">--}}
{{--                            <h4 class="fw-title">Danh mục sản phẩm</h4>--}}
{{--                            <ul class="filter-catagories">--}}
{{--                                @foreach($categories as $category)--}}
{{--                                    <li><a href="shop/category/{{ $category->name }}">{{ $category->name }}</a></li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="filter-widget">--}}
{{--                            <h4 class="fw-title">Thương hiệu</h4>--}}
{{--                            <div class="fw-brand-check">--}}
{{--                                @foreach($brands as $brand)--}}
{{--                                    <div class="bc-item">--}}
{{--                                        <label for="bc-{{$brand->id}}">--}}
{{--                                            {{$brand->name}}--}}
{{--                                            <input type="checkbox"--}}
{{--                                                   {{ (request("brand")[$brand->id] ?? '') == 'on' ? 'checked' : '' }}--}}
{{--                                                   id="bc-{{$brand->id}}"--}}
{{--                                                   name="brand[{{$brand->id}}]"--}}
{{--                                                   onchange="this.form.submit();">--}}
{{--                                            <span class="checkmark"></span>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filter-widget">--}}
{{--                            <h4 class="fw-title">Giá</h4>--}}
{{--                            <div class="filter-range-wrap">--}}
{{--                                <div class="range-slider">--}}
{{--                                    <div class="price-input">--}}
{{--                                        <input type="text" id="minamount" name="price_min">--}}
{{--                                        <input type="text" id="maxamount" name="price_max">--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <div--}}
{{--                                    class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"--}}
{{--                                    data-min="0" data-max="999"--}}
{{--                                    data-min-value="{{ str_replace('$', '', request('price_min')) }}"--}}
{{--                                    data-max-value="{{ str_replace('$', '', request('price_max')) }}">--}}
{{--                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>--}}
{{--                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>--}}
{{--                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="filter-btn">Lọc</button>--}}
{{--                        </div>--}}
{{--                        <div class="filter-widget">--}}
{{--                            <h4 class="fw-title">Màu</h4>--}}
{{--                            <div class="fw-color-choose">--}}

{{--                                <div class="cs-item">--}}
{{--                                    <input type="radio" id="cs-black" name="color" value="black"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                            {{ request('color') == 'black' ? 'checked' : '' }}>--}}
{{--                                    <label class="cs-black {{ request('color') == 'black' ? 'font-weight-bold' : '' }} " for="cs-black">Black</label>--}}
{{--                                </div>--}}
{{--                                <div class="cs-item">--}}
{{--                                    <input type="radio" id="cs-violet" name="color" value="violet"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                            {{ request('color') == 'violet' ? 'checked' : '' }}>--}}
{{--                                    <label class="cs-violet {{ request('color') == 'violet' ? 'font-weight-bold' : '' }}" for="cs-violet">Violet</label>--}}
{{--                                </div>--}}
{{--                                <div class="cs-item">--}}
{{--                                    <input type="radio" id="cs-blue" name="color" value="blue"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                            {{ request('color') == 'blue' ? 'checked' : '' }}>--}}
{{--                                    <label class="cs-blue {{ request('color') == 'blue' ? 'font-weight-bold' : '' }}" for="cs-blue">Blue</label>--}}
{{--                                </div>--}}
{{--                                <div class="cs-item">--}}
{{--                                    <input type="radio" id="cs-red" name="color" value="red"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                        {{ request('color') == 'red' ? 'checked' : '' }}>--}}
{{--                                    <label class="cs-red {{ request('color') == 'red' ? 'font-weight-bold' : '' }}" for="cs-red">Red</label>--}}
{{--                                </div>--}}
{{--                                <div class="cs-item">--}}
{{--                                    <input type="radio" id="cs-green" name="color" value="green"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                        {{ request('color') == 'green' ? 'checked' : '' }}>--}}
{{--                                    <label class="cs-green {{ request('color') == 'green' ? 'font-weight-bold' : '' }}" for="cs-green">Green</label>--}}
{{--                                </div>--}}
{{--                                <div class="cs-item">--}}
{{--                                    <input type="radio" id="cs-yellow" name="color" value="yellow"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                        {{ request('color') == 'yellow' ? 'checked' : '' }}>--}}
{{--                                    <label class="cs-yellow {{ request('color') == 'yellow' ? 'font-weight-bold' : '' }}" for="cs-yellow">Yellow</label>--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filter-widget">--}}
{{--                            <h4 class="fw-title">Size</h4>--}}
{{--                            <div class="fw-size-choose">--}}
{{--                                <div class="sc-item">--}}
{{--                                    <input type="radio" id="s-size" name="size" value="s"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                        {{ request('size') == 's' ? 'checked' : '' }}>--}}
{{--                                    <label for="s-size" class="{{ request('size') == 's' ? 'active' : '' }}">S</label>--}}
{{--                                </div>--}}
{{--                                <div class="sc-item">--}}
{{--                                    <input type="radio" id="m-size" name="size" value="m"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                        {{ request('size') == 'm' ? 'checked' : '' }}>--}}
{{--                                    <label for="m-size" class="{{ request('size') == 'm' ? 'active' : '' }}">M</label>--}}
{{--                                </div>--}}
{{--                                <div class="sc-item">--}}
{{--                                    <input type="radio" id="l-size" name="size" value="l"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                        {{ request('size') == 'l' ? 'checked' : '' }}>--}}
{{--                                    <label for="l-size" class="{{ request('size') == 'l' ? 'active' : '' }}">L</label>--}}
{{--                                </div>--}}
{{--                                <div class="sc-item">--}}
{{--                                    <input type="radio" id="xl-size" name="size" value="xl"--}}
{{--                                           onchange="this.form.submit();"--}}
{{--                                        {{ request('size') == 'xl' ? 'checked' : '' }}>--}}
{{--                                    <label for="xl-size" class="{{ request('size') == 'xl' ? 'active' : '' }}">XL</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="filter-widget">--}}
{{--                            <h4 class="fw-title">Tags</h4>--}}
{{--                            <div class="fw-tags">--}}
{{--                                <a href="#">Towel</a>--}}
{{--                                <a href="#">Towel</a>--}}
{{--                                <a href="#">Towel</a>--}}
{{--                                <a href="#">Towel</a>--}}
{{--                                <a href="#">Towel</a>--}}
{{--                                <a href="#">Towel</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <form action="">
                                    <div class="select-option">
                                        <select name="sort_by" onchange="this.form.submit();" class="sorting">
                                            <option
                                                {{ request('sort_by') == 'lastest' ? 'selected' : '' }} value="lastest">
                                                Mặc định
                                            </option>
                                            <option
                                                {{ request('sort_by') == 'name-asc' ? 'selected' : '' }} value="name-asc">
                                                Tên: A - Z
                                            </option>
                                            <option
                                                {{ request('sort_by') == 'name-desc' ? 'selected' : '' }} value="name-desc">
                                                Tên: Z - A
                                            </option>
                                            <option
                                                {{ request('sort_by') == 'price-asc' ? 'selected' : '' }} value="price-asc">
                                                Giá: Thấp - Cao
                                            </option>
                                            <option
                                                {{ request('sort_by') == 'price-desc' ? 'selected' : '' }} value="price-desc">
                                                Giá: Cao - Thấp
                                            </option>
                                        </select>
                                        <select name="show" onchange="this.form.submit();" class="sorting">
                                            <option {{ request('show') == '3' ? 'selected' : '' }} value="3">Show: 3
                                            </option>
                                            <option {{ request('show') == '9' ? 'selected' : '' }} value="9">Show: 9
                                            </option>
                                            <option {{ request('show') == '15' ? 'selected' : '' }} value="15">Show:
                                                15
                                            </option>
                                        </select>

                                    </div>
                                </form>


                            </div>
                            <div class="col-lg-5 col-md-5 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach($products as $product)
                                @include('front.components.product-item')
{{--                                <div class="col-lg-4 col-sm-6">--}}
{{--                                    <div class="product-item">--}}
{{--                                        <div class="pi-pic">--}}
{{--                                            <img src="front/img/products/{{$product->productImages[0]->path}}" alt="">--}}
{{--                                            @if($product->disount != null)--}}
{{--                                                <div class="sale pp-sale">Sale</div>--}}
{{--                                            @endif--}}
{{--                                            <div class="icon">--}}
{{--                                                <i class="icon_heart_alt"></i>--}}
{{--                                            </div>--}}
{{--                                            <ul>--}}
{{--                                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="quick-view"><a href="shop/product/{{ $product->id }}">Xem--}}
{{--                                                        nhanh</a></li>--}}
{{--                                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="pi-text">--}}
{{--                                            <div class="catagory-name">{{$product->tag}}</div>--}}
{{--                                            <a href="shop/product/{{ $product->id }}">--}}
{{--                                                <h5>{{ $product->name }}</h5>--}}
{{--                                            </a>--}}
{{--                                            <div class="product-price">--}}
{{--                                                @if($product->discount != null)--}}
{{--                                                    {{ $product->discount }}--}}
{{--                                                    <span>{{ $product->price }}</span>--}}
{{--                                                @else--}}
{{--                                                    {{ $product->price  }}--}}
{{--                                                @endif--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            @endforeach
                        </div>
                    </div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
    <!--product shop section end-->

@endsection
