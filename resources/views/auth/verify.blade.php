@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('لطفا ایمیل خود را تایید کنید') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('یک ایمیل جدید بار دیگر برای آدرس ایمیلی که وارد کرده بودید ارسال شد') }}
                        </div>
                    @endif

                    {{ __('یک ایمیل حاوی لینک فعالسازی برای ایمیل شما ارسال شده است') }}
                    {{ __('اگر ایمیلی دریافت نکرده اید') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('اینجا کلیک کنید') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
