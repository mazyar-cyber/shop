@extends('FrontEnd.layouts.master')
@section('content')
    <div class="alert alert-info">
        {{$user->name}}به صفحه ی کاربری خود خوش آمدید
    </div>
    <div id="content">
        <h1>وضعیت سفارشات شما</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">مقدار پول به تومان</th>
                <th scope="col">وضعیت</th>
                <th scope="col">محصولات خریداری شده</th>
                <th>تاریخ خرید</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $key=>$order)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$order->amount}}</td>
                    @if($order->status==0)
                        <td>
                            <span class="btn btn-danger">پرداخت ناموفق</span>
                        </td>
                    @else
                        <td>
                            <button class="btn btn-success">پرداخت شده</button>
                        </td>
                    @endif
                    <td>
                        @foreach($order->product as $p)
                            <div>
                                <a href="/FrontProduct/{{$p->product->slug}}"><span>{{$p->product->title}}</span></a>
                                <strong>به تعداد:{{$p->qty}}</strong>
                            </div>
                        @endforeach
                    </td>
                    <td>{{\Hekmatinasser\Verta\Verta::today($order->updated_at)->format('%B %d، %Y')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <aside id="column-right" class="col-sm-3 hidden-xs">
        <h3 class="subtitle">حساب کاربری</h3>
        <div class="list-group">
            <ul class="list-item">
                <li><a href="login.html">ورود</a></li>
                <li><a href="register.html">ثبت نام</a></li>
                <li><a href="#">فراموشی رمز عبور</a></li>
                <li><a href="#">حساب کاربری</a></li>
                <li><a href="#">لیست آدرس ها</a></li>
                <li><a href="wishlist.html">لیست علاقه مندی</a></li>
                <li><a href="#">تاریخچه سفارشات</a></li>
                <li><a href="#">دانلود ها</a></li>
                <li><a href="#">امتیازات خرید</a></li>
                <li><a href="#">بازگشت</a></li>
                <li><a href="#">تراکنش ها</a></li>
                <li><a href="#">خبرنامه</a></li>
                <li><a href="#">پرداخت های تکرار شونده</a></li>
            </ul>
        </div>
    </aside>
@endsection
