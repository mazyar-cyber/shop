@extends('FrontEnd.layouts.master')

@section('content')
    <div id="app">
        <div class="row">
            <!--Middle Part Start-->
            <div class="col-sm-9" id="content">
                <h1 class="title">ثبت نام حساب کاربری</h1>
                <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="login.html">صفحه لاگین</a> مراجعه کنید.
                </p>
                @include('admin.partial.error')
                <form class="form-horizontal" action="{{route('user.store')}}" method="post">
                    @csrf
                    <fieldset id="account">
                        <legend>اطلاعات شخصی شما</legend>
                        <div style="display: none;" class="form-group required">
                            <label class="col-sm-2 control-label">گروه مشتری</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="checked" value="1" name="customer_group_id">
                                        پیشفرض</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-firstname" class="col-sm-2 control-label">نام</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-firstname" placeholder="نام"
                                       name="name">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-lastname" class="col-sm-2 control-label">نام خانوادگی</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-lastname" placeholder="نام خانوادگی"
                                       value="" name="lastname">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-email" class="col-sm-2 control-label">آدرس ایمیل</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="input-email" placeholder="آدرس ایمیل"
                                       value=""
                                       name="email">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-telephone" class="col-sm-2 control-label">شماره تلفن</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" id="input-telephone" placeholder="شماره تلفن"
                                       value="" name="telephone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-fax" class="col-sm-2 control-label">فکس</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-fax" placeholder="فکس" value=""
                                       name="fax">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="address">
                        <legend>آدرس</legend>
                        <div class="form-group">
                            <label for="input-company" class="col-sm-2 control-label">شرکت</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-company" placeholder="شرکت" value=""
                                       name="company">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-address-1" class="col-sm-2 control-label">آدرس 1</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-address-1" placeholder="آدرس 1"
                                       value=""
                                       name="address_1">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-city" class="col-sm-2 control-label">شهر</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-city" placeholder="شهر" value=""
                                       name="city">
                            </div>
                        </div>

                        <div class="form-group required">
                            <label for="input-postcode" class="col-sm-2 control-label">کد پستی</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-postcode" placeholder="کد پستی"
                                       value=""
                                       name="postalcode">
                            </div>
                        </div>

                        {{--                    <div id="app">--}}
                        <province_city></province_city>
                        {{--                    </div>--}}
                    </fieldset>
                    <fieldset>
                        <legend>رمز عبور شما</legend>
                        <div class="form-group required">
                            <label for="input-password" class="col-sm-2 control-label">رمز عبور</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-password" placeholder="رمز عبور"
                                       value="" name="password">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-confirm"
                                       placeholder="تکرار رمز عبور"
                                       value="" name="password_confirmation">
                            </div>
                        </div>
                    </fieldset>
                    <input type="submit" class="btn btn-primary" value="ثبت نام">
                </form>
            </div>
            <!--Middle Part End -->
            <!--Right Part Start -->
            <!--Right Part End -->
        </div>
    </div>

    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Register') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    <form method="POST" action="{{ route('register') }}">--}}
    {{--                        @csrf--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

    {{--                                @error('name')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

    {{--                                @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

    {{--                                @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row mb-0">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Register') }}--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
@endsection
