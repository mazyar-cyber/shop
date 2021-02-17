@extends('FrontEnd.layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="cart.html">سبد خرید</a></li>
    </ul>
    @if (\Illuminate\Support\Facades\Session::has('coupon-expired'))
        <div class="alert alert-warning">
            {{session('coupon-expired')}}
        </div>
    @endif
    @if (\Illuminate\Support\Facades\Session::has('coupon-null'))
        <div class="alert alert-danger">
            {{session('coupon-null')}}
        </div>
    @endif
    <div class="alert alert-info">توجه داشته باشید درصورت عوض کردن تعداد محصول حتما دکمه بروز رسانی را کلیک کنید</div>
    <div class="row">
        <!--Middle Part Start-->
        <div id="app">
            <div id="content" class="col-sm-12">
                <h1 class="title">سبد خرید</h1>
                <basket :data="{{$baskets}}"></basket>
                <h2 class="subtitle">حالا مایلید چه کاری انجام دهید؟</h2>
                <p>در صورتی که کد تخفیف در اختیار دارید میتوانید از آن در اینجا استفاده کنید.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">استفاده از کوپن تخفیف</h4>
                            </div>
                            <div id="collapse-coupon" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <label class="col-sm-4 control-label" for="input-coupon">کد تخفیف خود را در
                                        اینجا
                                        وارد کنید</label>
                                    <form action="{{route('check.coupon')}}" method="post">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" name="coupon"
                                                   placeholder="کد تخفیف خود را در اینجا وارد کنید" id="input-coupon"
                                                   class="form-control" required/>
                                            <span class="input-group-btn">
                      <input type="submit" value="اعمال کوپن" name="btn"
                             class="btn btn-primary"/>
                      </span>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (\Illuminate\Support\Facades\Session::has('coupon-apply'))
                    <div class="alert alert-success">
                        {{session('coupon-apply')}}
                    </div>
                @endif

                <price-table></price-table>
                <div class="buttons">
                    <div class="pull-left"><a href="index.html" class="btn btn-default">ادامه خرید</a></div>
                    <div class="pull-right"><a href="checkout.html" class="btn btn-primary">تسویه حساب</a></div>
                </div>
            </div>
        </div>
        <!--Middle Part End -->
    </div>
@endsection