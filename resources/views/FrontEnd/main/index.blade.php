@extends('FrontEnd.layouts.master')
@section('content')
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-xs-12">
            <!-- Slideshow Start-->
            @if (\Illuminate\Support\Facades\Session::has('basket-add'))
                <div class="alert alert-success">{{Session('basket-add')}}</div>
            @endif
            <div class="slideshow single-slider owl-carousel owl-theme" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper"
                         style="width: 4560px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-1140px, 0px, 0px);">
                        <div class="owl-item" style="width: 1140px;">
                            <div class="item"><a href="#"><img class="img-responsive"
                                                               src="/FrontEnd/image/slider/banner-2.jpg"
                                                               alt="banner 2"></a></div>
                        </div>
                        <div class="owl-item" style="width: 1140px;">
                            <div class="item"><a href="#"><img class="img-responsive"
                                                               src="/FrontEnd/image/slider/banner-1.jpg"
                                                               alt="banner 1"></a></div>
                        </div>
                    </div>
                </div>

                <div class="owl-controls clickable">
                    <div class="owl-pagination">
                        <div class="owl-page"><span class=""></span></div>
                        <div class="owl-page active"><span class=""></span></div>
                    </div>
                    <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
                        <div class="owl-next"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
            <!-- Slideshow End-->
            <!-- Banner Start-->
            <!-- Banner End-->
            <!-- محصولات Tab Start -->
            <div id="product-tab" class="product-tab">
                <ul id="tabs" class="tabs">
                    <li class="active"><a href="#tab-featured">ویژه</a></li>
                    <li><a href="#tab-latest">جدیدترین</a></li>
                    <li><a href="#tab-bestseller">پرفروش</a></li>
                    <li><a href="#tab-special">پیشنهادی</a></li>
                </ul>
                <div id="tab-featured" class="tab_content deactive" style="display: block;">
                    <div class="owl-carousel product_carousel_tab owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 2736px; left: 0px; display: block;">
                                @foreach($products as $product)
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="{{route('FrontProduct.show',$product->slug)}}"><img
                                                    src="/storage/photos/product/{{$product->photo_path}}"
                                                    alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">{{$product->title}}</a></h4>
                                            <p class="price"><span class="price-new">110000 تومان</span> <span
                                                    class="price-old">122000 تومان</span><span
                                                    class="saving">-10%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <a href="{{route('basket.add',$product->id)}}" class="btn btn-primary" type="button">
                                                <span>افزودن به سبد</span></a>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی ها"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="مقایسه این محصول"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/samsung_tab_1-220x330.jpg"
                                                    alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive"></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">تبلت ایسر</a></h4>
                                            <p class="price"><span class="price-new">98000 تومان</span> <span
                                                    class="price-old">240000 تومان</span> <span
                                                    class="saving">-5%</span></p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span></div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="cart.add('49');">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی ها"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="مقایسه این محصول"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/sony_vaio_1-220x330.jpg"
                                                    alt="کفش راحتی مردانه" title="کفش راحتی مردانه"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">کفش راحتی مردانه</a></h4>
                                            <p class="price"><span class="price-new">32000 تومان</span> <span
                                                    class="price-old">12 میلیون تومان</span> <span
                                                    class="saving">-25%</span>
                                            </p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span></div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="cart.add('46');">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی ها"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="مقایسه این محصول"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/macbook_1-220x330.jpg"
                                                    alt="آیدیا پد یوگا" title="آیدیا پد یوگا"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                            <p class="price"> 211000 تومان </p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span></div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="cart.add('43');">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی ها"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="مقایسه این محصول"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/iphone_1-220x330.jpg" alt="آیفون 7"
                                                    title="آیفون 7" class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">آیفون 7</a></h4>
                                            <p class="price"> 2200000 تومان </p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span></div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی ها"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="مقایسه این محصول"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/canon_eos_5d_1-220x330.jpg"
                                                    alt="تیشرت آستین بلند مردانه" title="تیشرت آستین بلند مردانه"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">تیشرت آستین بلند مردانه</a></h4>
                                            <p class="price"><span class="price-new">98000 تومان</span> <span
                                                    class="price-old">122000 تومان</span> <span
                                                    class="saving">-20%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی ها"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="مقایسه این محصول"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="owl-controls clickable">
                            <div class="owl-pagination">
                                <div class="owl-page active"><span class=""></span></div>
                                <div class="owl-page"><span class=""></span></div>
                            </div>
                            <div class="owl-buttons">
                                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab-latest" class="tab_content deactive">
                    <div class="owl-carousel product_carousel_tab owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 3192px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/macbook_2-220x330.jpg"
                                                    alt="عطر نینا ریچی" title="عطر نینا ریچی"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">عطر نینا ریچی</a></h4>
                                            <p class="price"> 110000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/macbook_3-220x330.jpg"
                                                    alt="رژ لب گارنیر" title="رژ لب گارنیر" class="img-responsive"></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">رژ لب گارنیر</a></h4>
                                            <p class="price"> 123000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/macbook_4-220x330.jpg"
                                                    alt="عطر گوچی" title="عطر گوچی" class="img-responsive"></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">عطر گوچی</a></h4>
                                            <p class="price"> 85000 تومان </p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span></div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/iphone_6-220x330.jpg"
                                                    alt="کرم مو آقایان" title="کرم مو آقایان"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">کرم مو آقایان</a></h4>
                                            <p class="price"> 42300 تومان </p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span></div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/nikon_d300_5-220x330.jpg"
                                                    alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                                            <p class="price"><span class="price-new">66000 تومان</span> <span
                                                    class="price-old">90000 تومان</span> <span
                                                    class="saving">-27%</span></p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span></div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/nikon_d300_4-220x330.jpg"
                                                    alt="کرم لخت کننده مو" title="کرم لخت کننده مو"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                                            <p class="price"> 88000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href=""><img
                                                    src="/FrontEnd/image/product/macbook_5-220x330.jpg"
                                                    alt="ژل حمام بانوان" title="ژل حمام بانوان"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">ژل حمام بانوان</a></h4>
                                            <p class="price"><span class="price-new">19500 تومان</span> <span
                                                    class="price-old">21900 تومان</span> <span
                                                    class="saving">-4%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="cart.add('61');">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="wishlist.add('61');"
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="compare.add('61');"
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="owl-controls clickable">
                            <div class="owl-pagination">
                                <div class="owl-page active"><span class=""></span></div>
                                <div class="owl-page"><span class=""></span></div>
                            </div>
                            <div class="owl-buttons">
                                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-bestseller" class="tab_content deactive">
                    <div class="owl-carousel product_carousel_tab owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 912px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="image/product/FinePix-Long-Zoom-Camera-220x330.jpg"
                                                    alt="دوربین فاین پیکس" title="دوربین فاین پیکس"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                                            <p class="price"> 122000 تومان </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/nikon_d300_1-220x330.jpg"
                                                    alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                                            <p class="price"><span class="price-new">92000 تومان</span> <span
                                                    class="price-old">98000 تومان</span> <span
                                                    class="saving">-6%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-controls clickable" style="display: none;">
                            <div class="owl-pagination">
                                <div class="owl-page"><span class=""></span></div>
                            </div>
                            <div class="owl-buttons">
                                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-special" class="tab_content deactive">
                    <div class="owl-carousel product_carousel_tab owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 2736px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/ipod_touch_1-220x330.jpg"
                                                    alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                            <p class="price"><span class="price-new">62000 تومان</span> <span
                                                    class="price-old">122000 تومان</span> <span
                                                    class="saving">-50%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href=""><img
                                                    src="/FrontEnd/image/product/macbook_5-220x330.jpg"
                                                    alt="ژل حمام بانوان" title="ژل حمام بانوان"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">ژل حمام بانوان</a></h4>
                                            <p class="price"><span class="price-new">19500 تومان</span> <span
                                                    class="price-old">21900 تومان</span> <span
                                                    class="saving">-4%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="cart.add('61');">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="wishlist.add('61');"
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title=""
                                                        onclick="compare.add('61');"
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/macbook_air_1-220x330.jpg"
                                                    alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                                            <p class="price"><span class="price-new">10 میلیون تومان</span> <span
                                                    class="price-old">12 میلیون تومان</span> <span
                                                    class="saving">-5%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb clearfix">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/apple_cinema_30-220x330.jpg"
                                                    alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه"
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">تی شرت کتان مردانه</a></h4>
                                            <p class="price"><span class="price-new">110000 تومان</span> <span
                                                    class="price-old">122000 تومان</span><span
                                                    class="saving">-10%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="cart.add('42');">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی ها"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="مقایسه این محصول"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/macbook_pro_1-220x330.jpg"
                                                    alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی "
                                                    class="img-responsive"></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                                            <p class="price"><span class="price-new">98000 تومان</span> <span
                                                    class="price-old">120000 تومان</span> <span
                                                    class="saving">-26%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 228px;">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="/FrontEnd/image/product/samsung_tab_1-220x330.jpg"
                                                    alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive"></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">تبلت ایسر</a></h4>
                                            <p class="price"><span class="price-new">98000 تومان</span> <span
                                                    class="price-old">240000 تومان</span> <span
                                                    class="saving">-5%</span></p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span></div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onclick="">
                                                <span>افزودن به سبد</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به علاقه مندی"><i
                                                        class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="" onclick=""
                                                        data-original-title="افزودن به مقایسه"><i
                                                        class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="owl-controls clickable">
                            <div class="owl-pagination">
                                <div class="owl-page active"><span class=""></span></div>
                                <div class="owl-page"><span class=""></span></div>
                            </div>
                            <div class="owl-buttons">
                                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>    <!-- محصولات Tab Start -->
            <!-- Banner Start -->
            <div class="marketshop-banner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img
                                src="/FrontEnd/image/banner/sample-banner-4-600x250.jpg" alt="2 Block Banner"
                                title="2 Block Banner"></a></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img
                                src="/FrontEnd/image/banner/sample-banner-5-600x250.jpg" alt="2 Block Banner 1"
                                title="2 Block Banner 1"></a></div>
                </div>
            </div>
            <!-- Banner End -->
            <!-- دسته ها محصولات Slider Start-->
            <div class="category-module" id="latest_category">
                <h3 class="subtitle">مد و زیبایی - <a class="viewall" href="category.tpl">نمایش همه</a></h3>
                <div class="category-module-content">
                    <ul id="sub-cat" class="tabs">
                        <li class="active"><a href="#tab-cat1">آقایان</a></li>
                        <li><a href="#tab-cat2">بانوان</a></li>
                        <li><a href="#tab-cat3">دخترانه</a></li>
                        <li><a href="#tab-cat4">پسرانه</a></li>
                        <li><a href="#tab-cat5">نوزاد</a></li>
                        <li><a href="#tab-cat6">لوازم</a></li>
                    </ul>
                    <div id="tab-cat1" class="tab_content deactive" style="display: block;">
                        <div class="owl-carousel latest_category_tabs owl-theme"
                             style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 2736px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/samsung_tab_1-220x330.jpg"
                                                        alt="تبلت ایسر" title="تبلت ایسر"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">تبلت ایسر</a></h4>
                                                <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">240000 تومان</span> <span
                                                        class="saving">-5%</span>
                                                </p>
                                                <div class="rating"><span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/macbook_pro_1-220x330.jpg"
                                                        alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی "
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                                                <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">120000 تومان</span> <span
                                                        class="saving">-26%</span>
                                                </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/macbook_air_1-220x330.jpg"
                                                        alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                                                <p class="price"><span class="price-new">10 میلیون تومان</span>
                                                    <span class="price-old">12 میلیون تومان</span> <span
                                                        class="saving">-5%</span></p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/macbook_1-220x330.jpg"
                                                        alt="آیدیا پد یوگا" title="آیدیا پد یوگا"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                                <p class="price"> 211000 تومان </p>
                                                <div class="rating"><span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_shuffle_1-220x330.jpg"
                                                        alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                                <p class="price"> 122000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_touch_1-220x330.jpg"
                                                        alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                                <p class="price"><span class="price-new">62000 تومان</span> <span
                                                        class="price-old">122000 تومان</span> <span
                                                        class="saving">-50%</span>
                                                </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                    <div class="owl-page active"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-cat2" class="tab_content deactive">
                        <div class="owl-carousel latest_category_tabs owl-theme"
                             style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 456px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_shuffle_1-220x330.jpg"
                                                        alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                                <p class="price"> 122000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-controls clickable" style="display: none;">
                                <div class="owl-pagination">
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-cat3" class="tab_content deactive">
                        <div class="owl-carousel latest_category_tabs owl-theme"
                             style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 912px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/FinePix-Long-Zoom-Camera-220x330.jpg"
                                                        alt="دوربین فاین پیکس" title="دوربین فاین پیکس"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                                                <p class="price"> 122000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/nikon_d300_1-220x330.jpg"
                                                        alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                                                <p class="price"><span class="price-new">92000 تومان</span> <span
                                                        class="price-old">98000 تومان</span> <span
                                                        class="saving">-6%</span>
                                                </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-controls clickable" style="display: none;">
                                <div class="owl-pagination">
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-cat4" class="tab_content deactive">
                        <div class="owl-carousel latest_category_tabs owl-theme"
                             style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 1824px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/samsung_tab_1-220x330.jpg"
                                                        alt="تبلت ایسر" title="تبلت ایسر"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">تبلت ایسر</a></h4>
                                                <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">240000 تومان</span> <span
                                                        class="saving">-5%</span>
                                                </p>
                                                <div class="rating"><span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/iphone_1-220x330.jpg"
                                                        alt="آیفون 7" title="آیفون 7" class="img-responsive"></a>
                                            </div>
                                            <div class="caption">
                                                <h4><a href="product.html">آیفون 7</a></h4>
                                                <p class="price"> 2200000 تومان </p>
                                                <div class="rating"><span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_touch_1-220x330.jpg"
                                                        alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                                <p class="price"><span class="price-new">62000 تومان</span> <span
                                                        class="price-old">122000 تومان</span> <span
                                                        class="saving">-50%</span>
                                                </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/palm_treo_pro_1-220x330.jpg"
                                                        alt="موبایل HTC M7" title="موبایل HTC M7"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">موبایل HTC M7</a></h4>
                                                <p class="price"> 377000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="owl-controls clickable" style="display: none;">
                                <div class="owl-pagination">
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-cat5" class="tab_content deactive">
                        <div class="owl-carousel latest_category_tabs owl-theme"
                             style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 4560px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/samsung_tab_1-220x330.jpg"
                                                        alt="تبلت ایسر" title="تبلت ایسر"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">تبلت ایسر</a></h4>
                                                <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">240000 تومان</span> <span
                                                        class="saving">-5%</span>
                                                </p>
                                                <div class="rating"><span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_classic_1-220x330.jpg"
                                                        alt="آیپاد نسل 5" title="آیپاد نسل 5"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">آیپاد نسل 5</a></h4>
                                                <p class="price"> 122000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/macbook_pro_1-220x330.jpg"
                                                        alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی "
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                                                <p class="price"><span class="price-new">98000 تومان</span> <span
                                                        class="price-old">120000 تومان</span> <span
                                                        class="saving">-26%</span>
                                                </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/macbook_air_1-220x330.jpg"
                                                        alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                                                <p class="price"><span class="price-new">10 میلیون تومان</span>
                                                    <span class="price-old">12 میلیون تومان</span> <span
                                                        class="saving">-5%</span></p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/macbook_1-220x330.jpg"
                                                        alt="آیدیا پد یوگا" title="آیدیا پد یوگا"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                                <p class="price"> 211000 تومان </p>
                                                <div class="rating"><span class="fa fa-stack"><i
                                                            class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                        class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_nano_1-220x330.jpg"
                                                        alt="پخش کننده موزیک" title="پخش کننده موزیک"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">پخش کننده موزیک</a></h4>
                                                <p class="price"> 122000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/FinePix-Long-Zoom-Camera-220x330.jpg"
                                                        alt="دوربین فاین پیکس" title="دوربین فاین پیکس"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                                                <p class="price"> 122000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_shuffle_1-220x330.jpg"
                                                        alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                                <p class="price"> 122000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="cart.add('34');">
                                                    <span>افزودن به سبد</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            onclick="wishlist.add('34');"
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            onclick="compare.add('34');"
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_touch_1-220x330.jpg"
                                                        alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                                <p class="price"><span class="price-new">62000 تومان</span> <span
                                                        class="price-old">122000 تومان</span> <span
                                                        class="saving">-50%</span>
                                                </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/nikon_d300_1-220x330.jpg"
                                                        alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                                                <p class="price"><span class="price-new">92000 تومان</span> <span
                                                        class="price-old">98000 تومان</span> <span
                                                        class="saving">-6%</span>
                                                </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                    <div class="owl-page active"><span class=""></span></div>
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-cat6" class="tab_content deactive">
                        <div class="owl-carousel latest_category_tabs owl-theme"
                             style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 912px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_classic_1-220x330.jpg"
                                                        alt="آیپاد نسل 5" title="آیپاد نسل 5"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">آیپاد نسل 5</a></h4>
                                                <p class="price"> 122000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="cart.add('48');">
                                                    <span>افزودن به سبد</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 228px;">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img
                                                        src="/FrontEnd/image/product/ipod_nano_1-220x330.jpg"
                                                        alt="پخش کننده موزیک" title="پخش کننده موزیک"
                                                        class="img-responsive"></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">پخش کننده موزیک</a></h4>
                                                <p class="price"> 122000 تومان </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onclick="">
                                                    <span>افزودن به سبد</span>
                                                </button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به علاقه مندی"><i
                                                            class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="" onclick=""
                                                            data-original-title="افزودن به مقایسه"><i
                                                            class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-controls clickable" style="display: none;">
                                <div class="owl-pagination">
                                    <div class="owl-page"><span class=""></span></div>
                                </div>
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- دسته ها محصولات Slider End-->

            <!-- دسته ها محصولات Slider Start -->
            <h3 class="subtitle">البسه - <a class="viewall" href="category.html">نمایش همه</a></h3>
            <div class="owl-carousel latest_category_carousel owl-theme" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 3192px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 228px;">
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img
                                            src="/FrontEnd/image/product/iphone_6-220x330.jpg" alt="کرم مو آقایان"
                                            title="کرم مو آقایان" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">کرم مو آقایان</a></h4>
                                    <p class="price"> 42300 تومان </p>
                                    <div class="rating"><span class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span></div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onclick=""><span>افزودن به سبد</span>
                                    </button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به علاقه مندی"><i
                                                class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به مقایسه"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 228px;">
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img
                                            src="/FrontEnd/image/product/nikon_d300_5-220x330.jpg"
                                            alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو"
                                            class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                                    <p class="price"><span class="price-new">66000 تومان</span> <span
                                            class="price-old">90000 تومان</span> <span class="saving">-27%</span>
                                    </p>
                                    <div class="rating"><span class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onclick=""><span>افزودن به سبد</span>
                                    </button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به علاقه مندی"><i
                                                class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به مقایسه"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 228px;">
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img
                                            src="/FrontEnd/image/product/nikon_d300_4-220x330.jpg"
                                            alt="کرم لخت کننده مو" title="کرم لخت کننده مو" class="img-responsive"></a>
                                </div>
                                <div class="caption">
                                    <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                                    <p class="price"> 88000 تومان </p>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onclick=""><span>افزودن به سبد</span>
                                    </button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به علاقه مندی"><i
                                                class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به مقایسه"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 228px;">
                            <div class="product-thumb">
                                <div class="image"><a href=""><img
                                            src="/FrontEnd/image/product/macbook_5-220x330.jpg" alt="ژل حمام بانوان"
                                            title="ژل حمام بانوان" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">ژل حمام بانوان</a></h4>
                                    <p class="price"><span class="price-new">19500 تومان</span> <span
                                            class="price-old">21900 تومان</span> <span class="saving">-4%</span></p>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onclick="cart.add('61');"><span>افزودن به سبد</span>
                                    </button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title=""
                                                onclick="wishlist.add('61');"
                                                data-original-title="افزودن به علاقه مندی"><i
                                                class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title=""
                                                onclick="compare.add('61');" data-original-title="افزودن به مقایسه">
                                            <i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 228px;">
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img
                                            src="/FrontEnd/image/product/macbook_4-220x330.jpg" alt="عطر گوچی"
                                            title="عطر گوچی" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">عطر گوچی</a></h4>
                                    <p class="price"> 85000 تومان </p>
                                    <div class="rating"><span class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span></div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onclick=""><span>افزودن به سبد</span>
                                    </button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به علاقه مندی"><i
                                                class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به مقایسه"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 228px;">
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img
                                            src="/FrontEnd/image/product/macbook_3-220x330.jpg" alt="رژ لب گارنیر"
                                            title="رژ لب گارنیر" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">رژ لب گارنیر</a></h4>
                                    <p class="price"> 123000 تومان </p>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onclick=""><span>افزودن به سبد</span>
                                    </button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به علاقه مندی"><i
                                                class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به مقایسه"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 228px;">
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img
                                            src="/FrontEnd/image/product/macbook_2-220x330.jpg" alt="عطر نینا ریچی"
                                            title="عطر نینا ریچی" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">عطر نینا ریچی</a></h4>
                                    <p class="price"> 110000 تومان </p>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onclick=""><span>افزودن به سبد</span>
                                    </button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به علاقه مندی"><i
                                                class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" onclick=""
                                                data-original-title="افزودن به مقایسه"><i
                                                class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="owl-controls clickable">
                    <div class="owl-pagination">
                        <div class="owl-page active"><span class=""></span></div>
                        <div class="owl-page"><span class=""></span></div>
                    </div>
                    <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <!-- دسته ها محصولات Slider End -->

            <!-- برند Logo Carousel Start-->
            <div id="carousel" class="owl-carousel nxt owl-theme" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper"
                         style="width: 3040px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-190px, 0px, 0px);">
                        <div class="owl-item" style="width: 190px;">
                            <div class="item text-center"><a href="#"><img
                                        src="/FrontEnd/image/product/apple_logo-100x100.jpg" alt="پالم"
                                        class="img-responsive"></a></div>
                        </div>
                        <div class="owl-item" style="width: 190px;">
                            <div class="item text-center"><a href="#"><img
                                        src="/FrontEnd/image/product/canon_logo-100x100.jpg" alt="سونی"
                                        class="img-responsive"></a></div>
                        </div>
                        <div class="owl-item" style="width: 190px;">
                            <div class="item text-center"><a href="#"><img
                                        src="/FrontEnd/image/product/apple_logo-100x100.jpg" alt="کنون"
                                        class="img-responsive"></a></div>
                        </div>
                        <div class="owl-item" style="width: 190px;">
                            <div class="item text-center"><a href="#"><img
                                        src="/FrontEnd/image/product/canon_logo-100x100.jpg" alt="اپل"
                                        class="img-responsive"></a></div>
                        </div>
                        <div class="owl-item" style="width: 190px;">
                            <div class="item text-center"><a href="#"><img
                                        src="/FrontEnd/image/product/apple_logo-100x100.jpg" alt="اچ تی سی"
                                        class="img-responsive"></a></div>
                        </div>
                        <div class="owl-item" style="width: 190px;">
                            <div class="item text-center"><a href="#"><img
                                        src="/FrontEnd/image/product/canon_logo-100x100.jpg" alt="اچ پی"
                                        class="img-responsive"></a></div>
                        </div>
                        <div class="owl-item" style="width: 190px;">
                            <div class="item text-center"><a href="#"><img
                                        src="/FrontEnd/image/product/apple_logo-100x100.jpg" alt="brand"
                                        class="img-responsive"></a></div>
                        </div>
                        <div class="owl-item" style="width: 190px;">
                            <div class="item text-center"><a href="#"><img
                                        src="/FrontEnd/image/product/canon_logo-100x100.jpg" alt="brand1"
                                        class="img-responsive"></a></div>
                        </div>
                    </div>
                </div>


                <div class="owl-controls clickable">
                    <div class="owl-pagination">
                        <div class="owl-page active"><span class=""></span></div>
                        <div class="owl-page"><span class=""></span></div>
                    </div>
                    <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <!-- برند Logo Carousel End -->
        </div>
        <!--Middle Part End-->
    </div>
@endsection
