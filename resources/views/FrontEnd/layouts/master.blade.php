<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/FrontEnd/image/favicon.png" rel="icon"/>
    <title>مارکت شاپ - قالب HTML فروشگاهی</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="/FrontEnd/js/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/js/bootstrap/css/bootstrap-rtl.min.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/owl.transitions.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/stylesheet-rtl.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/responsive-rtl.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/stylesheet-skin2.css"/>

    <link rel="stylesheet" type="text/css" href="/FrontEnd/js/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/js/bootstrap/css/bootstrap-rtl.min.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/owl.transitions.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/js/swipebox/src/css/swipebox.min.css">
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/stylesheet-rtl.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/responsive-rtl.css"/>
    <link rel="stylesheet" type="text/css" href="/FrontEnd/css/stylesheet-skin2.css"/>

    <!-- CSS Part End-->
</head>
<body>
{{--<div id="app">--}}
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"><span class="drop-icon visible-sm visible-xs"><i
                            class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i
                                            class="fa fa-envelope"></i>info@marketshop.com</a></li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img alt="" src="/FrontEnd/image/banner/cms-block.jpg">
                                                        </td>
                                                        <td><img alt="" src="/FrontEnd/image/banner/responsive.jpg">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>بلاک های محتوا</h4></td>
                                                        <td><h4>قالب واکنش گرا</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای
                                                            html نوشتاری یا تصویری را در آن قرار دهید.
                                                        </td>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای
                                                            html نوشتاری یا تصویری را در آن قرار دهید.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه
                                                                    مطلب</a></strong></td>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه
                                                                    مطلب</a></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"><span> <img
                                        src="/FrontEnd/image/flags/gb.png" alt="انگلیسی" title="انگلیسی">انگلیسی <i
                                        class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB">
                                        <img src="/FrontEnd/image/flags/gb.png" alt="انگلیسی" title="انگلیسی"/>
                                        انگلیسی
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB">
                                        <img src="/FrontEnd/image/flags/ar.png" alt="عربی" title="عربی"/> عربی
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"><span> تومان <i
                                        class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">
                                        € Euro
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">
                                        £ Pound Sterling
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">
                                        $ USD
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <ul>
                                <li><a href="/profile">پروفایل</a></li>
                                <li><a href="/logout">خروج</a></li>
                            </ul>
                        @else
                            <ul>
                                <li><a href="/login">ورود</a></li>
                                <li><a href="/register">ثبت نام</a></li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="/"><img class="img-responsive"
                                                        src="/FrontEnd/image/logo.png" title="MarketShop"
                                                        alt="MarketShop"/></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="بارگذاری ..."
                                    class="heading dropdown-toggle">
                                <a href="/cart"><span class="cart-icon pull-left flip"></span></a>
                                <?php $totalPrice = 0;$totalPrice2 = 0;$totalDiscount = 0; foreach (\App\Models\Basket::where('user_id', Auth::id())->with('product')->get() as $b) {
                                    $price = (($b->product->price) - ($b->product->discount_price)) * ($b->count);
                                    $price2 = (($b->product->price)) * ($b->count);
                                    $discount = (($b->product->discount_price)) * ($b->count);
                                    $totalPrice = $price + $totalPrice;
                                    $totalPrice2 = $price2 + $totalPrice2;
                                    $totalDiscount = $discount + $totalDiscount;
                                } ?>
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <span id="cart-total">{{count(\App\Models\Basket::where('user_id',Auth::id())->with('product')->get())}} آیتم - {{number_format( $totalPrice)}} تومان</span>
                                @else
                                    <span>شما هنوز ثبت نام نکرده اید</span>
                                @endif
                            </button>
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <ul class="dropdown-menu">
                                    <li>
                                        <table class="table">
                                            <tbody>

                                            @foreach(\App\Models\Basket::where('user_id',Auth::id())->with('product')->get()  as $basket)
                                                <tr>
                                                    <td class="text-center"><a href="product.html"><img
                                                                class="img-thumbnail"
                                                                title="{{$basket->product->title}}"
                                                                alt="{{$basket->product->title}}"
                                                                width="90px"
                                                                src="/storage/photos/product/{{$basket->product->photo_path}}"></a>
                                                    </td>
                                                    <td class="text-left"><a
                                                            href="product.html">{{$basket->product->title}}</a>
                                                    </td>
                                                    <td class="text-right">x {{$basket->count}}</td>
                                                    <td class="text-right">{{number_format((($basket->product->price)-($basket->product->discount_price))*($basket->count))}}
                                                        تومان
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-danger btn-xs remove"
                                                           title="حذف این سفارش با کلیه ی تعداد"
                                                           href="/basket/delete/{{$basket->id}}"
                                                           type="button"><i
                                                                class="fa fa-times"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td class="text-right"><strong>جمع کل</strong></td>
                                                    <td class="text-right">{{number_format( $totalPrice2)}} تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>کسر هدیه</strong></td>
                                                    <td class="text-right">{{number_format($totalDiscount)}} تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>مالیات</strong></td>
                                                    <td class="text-right">11880 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right"><strong>قابل پرداخت</strong></td>
                                                    <td class="text-right">{{number_format( $totalPrice)}} تومان</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <p class="checkout"><a href="/cart" class="btn btn-primary"><i
                                                        class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a
                                                    href="checkout.html" class="btn btn-primary"><i
                                                        class="fa fa-share"></i> تسویه حساب</a></p>
                                        </div>
                                    </li>
                                </ul>
                            @else
                                <p style="color: #A3751C">اول باید ثبت نام کنید </p>
                            @endif
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو"
                                   class="form-control input-lg"/>
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
        <?php
        $categories = \App\Models\ProCat::where('parent_id', null)->get();
        ?>
        <nav id="menu" class="navbar">
            <div class="navbar-header"><span class="visible-xs visible-sm"> منو <b></b></span></div>
            <div class="container">
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="خانه" href="/">خانه</a></li>
                        @foreach($categories as $cat)
                            <li class="dropdown"><a href="/FrontCategory/{{$cat->id}}">{{$cat->name}}</a>
                                @if(count($cat->childrenRecursive)>0)
                                    @include('FrontEnd.menuRecursive.index',['data'=>$cat])
                                @endif
                            </li>
                        @endforeach
                        <li class="menu_brands dropdown"><a href="#">برند ها</a>
                            <div class="dropdown-menu">
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/apple_logo-60x60.jpg" title="اپل"
                                            alt="اپل"/></a><a href="#">اپل</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/canon_logo-60x60.jpg" title="کنون"
                                            alt="کنون"/></a><a href="#">کنون</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/hp_logo-60x60.jpg" title="اچ پی"
                                            alt="اچ پی"/></a><a href="#">اچ پی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/htc_logo-60x60.jpg" title="اچ تی سی"
                                            alt="اچ تی سی"/></a><a href="#">اچ تی سی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/palm_logo-60x60.jpg" title="پالم"
                                            alt="پالم"/></a><a href="#">پالم</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/sony_logo-60x60.jpg" title="سونی"
                                            alt="سونی"/></a><a href="#">سونی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/canon_logo-60x60.jpg" title="test"
                                            alt="test"/></a><a href="#">تست</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/apple_logo-60x60.jpg" title="test 3"
                                            alt="test 3"/></a><a href="#">تست 3</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/canon_logo-60x60.jpg" title="test 5"
                                            alt="test 5"/></a><a href="#">تست 5</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/canon_logo-60x60.jpg" title="test 6"
                                            alt="test 6"/></a><a href="#">تست 6</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="/FrontEnd/image/product/apple_logo-60x60.jpg" title="test 7"
                                            alt="test 7"/></a><a href="#">تست 7</a></div>


                            </div>
                        </li>
                        <li class="dropdown information-link"><a>برگه ها</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="login.html">ورود</a></li>
                                    <li><a href="register.html">ثبت نام</a></li>
                                    <li><a href="category.html">دسته بندی (شبکه/لیست)</a></li>
                                    <li><a href="product.html">محصولات</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="checkout.html">تسویه حساب</a></li>
                                    <li><a href="compare.html">مقایسه</a></li>
                                    <li><a href="wishlist.html">لیست آرزو</a></li>
                                    <li><a href="search.html">جستجو</a></li>
                                </ul>
                                <ul>
                                    <li><a href="about-us.html">درباره ما</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="elements.html">عناصر</a></li>
                                    <li><a href="faq.html">سوالات متداول</a></li>
                                    <li><a href="sitemap.html">نقشه سایت</a></li>
                                    <li><a href="contact-us.html">تماس با ما</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="custom-link-right"><a href="/cart" target="_blank"> همین حالا بخرید!</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main آقایانu End-->
    </div>

    <div id="container">

        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Feature Box Start-->
    <div class="container">
        <div class="custom-feature-box row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_1">
                    <div class="title">ارسال رایگان</div>
                    <p>برای خرید های بیش از 100 هزار تومان</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_2">
                    <div class="title">پس فرستادن رایگان</div>
                    <p>بازگشت کالا تا 24 ساعت پس از خرید</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_3">
                    <div class="title">کارت هدیه</div>
                    <p>بهترین هدیه برای عزیزان شما</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_4">
                    <div class="title">امتیازات خرید</div>
                    <p>از هر خرید امتیاز کسب کرده و از آن بهره بگیرید</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Box End-->
    <!--Footer Start-->
    <footer id="footer">
        <div class="fpart-first">
            <div class="container">
                <div class="row">
                    <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>درباره مارکت شاپ</h5>
                        <p>قالب HTML فروشگاهی مارکت شاپ. این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html
                            نوشتاری یا تصویری را در آن قرار دهید.</p>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>اطلاعات</h5>
                        <ul>
                            <li><a href="about-us.html">درباره ما</a></li>
                            <li><a href="about-us.html">اطلاعات 0 تومان</a></li>
                            <li><a href="about-us.html">حریم خصوصی</a></li>
                            <li><a href="about-us.html">شرایط و قوانین</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>خدمات مشتریان</h5>
                        <ul>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="#">بازگشت</a></li>
                            <li><a href="sitemap.html">نقشه سایت</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>امکانات جانبی</h5>
                        <ul>
                            <li><a href="#">برند ها</a></li>
                            <li><a href="#">کارت هدیه</a></li>
                            <li><a href="#">بازاریابی</a></li>
                            <li><a href="#">ویژه ها</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>حساب من</h5>
                        <ul>
                            <li><a href="#">حساب کاربری</a></li>
                            <li><a href="#">تاریخچه سفارشات</a></li>
                            <li><a href="#">لیست علاقه مندی</a></li>
                            <li><a href="#">خبرنامه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fpart-second">
            <div class="container">
                <div id="powered" class="clearfix">
                    <div class="powered_text pull-left flip">
                        <p>کپی رایت © 2016 فروشگاه شما | پارسی سازی و ویرایش توسط <a href="https://www.roxo.ir"
                                                                                     target="_blank">روکسو</a></p>
                    </div>
                    <div class="social pull-right flip"><a href="#" target="_blank"> <img data-toggle="tooltip"
                                                                                          src="image/socialicons/facebook.png"
                                                                                          alt="Facebook"
                                                                                          title="Facebook"></a> <a
                            href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/twitter.png"
                                                           alt="Twitter" title="Twitter"> </a> <a href="#"
                                                                                                  target="_blank">
                            <img data-toggle="tooltip" src="/FrontEnd/image/socialicons/google_plus.png"
                                 alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img
                                data-toggle="tooltip" src="/FrontEnd/image/socialicons/pinterest.png"
                                alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img
                                data-toggle="tooltip" src="/FrontEnd/image/socialicons/rss.png" alt="RSS"
                                title="RSS"> </a></div>
                </div>
                <div class="bottom-row">
                    <div class="custom-text text-center">
                        <p>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن
                            قرار دهید.<br> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان گرافیک است.</p>
                    </div>
                    <div class="payments_types"><a href="#" target="_blank"> <img data-toggle="tooltip"
                                                                                  src="image/payment/payment_paypal.png"
                                                                                  alt="paypal" title="PayPal"></a>
                        <a href="#" target="_blank"> <img data-toggle="tooltip"
                                                          src="/FrontEnd/image/payment/payment_american.png"
                                                          alt="american-express" title="American Express"></a> <a
                            href="#" target="_blank"> <img data-toggle="tooltip"
                                                           src="/FrontEnd/image/payment/payment_2checkout.png"
                                                           alt="2checkout" title="2checkout"></a> <a href="#"
                                                                                                     target="_blank">
                            <img data-toggle="tooltip" src="/FrontEnd/image/payment/payment_maestro.png"
                                 alt="maestro" title="Maestro"></a> <a href="#" target="_blank"> <img
                                data-toggle="tooltip" src="/FrontEnd/image/payment/payment_discover.png"
                                alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img
                                data-toggle="tooltip" src="/FrontEnd/image/payment/payment_mastercard.png"
                                alt="mastercard" title="MasterCard"></a></div>
                </div>
            </div>
        </div>
        <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)"
                              class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
    </footer>
    <!--Footer End-->

</div>

<!-- JS Part Start-->
<script type="text/javascript" src="/FrontEnd/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/custom.js"></script>

<!-- JS Part Start-->
<script type="text/javascript" src="/FrontEnd/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/swipebox/lib/ios-orientationchange-fix.js"></script>
<script type="text/javascript" src="/FrontEnd/js/swipebox/src/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="/FrontEnd/js/custom.js"></script>
<script type="text/javascript">
    // Elevate Zoom for Product Page image
    $("#zoom_01").elevateZoom({
        gallery: 'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 500,
        zoomWindowPosition: 11,
        lensFadeIn: 500,
        lensFadeOut: 500,
        loadingIcon: 'image/progress.gif'
    });
    //////pass the images to swipebox
    $("#zoom_01").bind("click", function (e) {
        var ez = $('#zoom_01').data('elevateZoom');
        $.swipebox(ez.getGalleryList());
        return false;
    });
</script>
<!-- JS Part End-->
<script src="{{asset('/js/app.js')}}"></script>
<!-- JS Part End-->

</body>
</html>
