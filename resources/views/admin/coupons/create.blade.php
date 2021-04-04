@extends('admin.layouts.master')
@section('context')
    <div class="box box-primary">
        @if (\Illuminate\Support\Facades\Session::has('coupon-save'))
            <div class="alert alert-success">
                {{session('coupon-save')}}
            </div>
        @endif
        <div class="box-header with-border">
            <h3 class="box-title">اضافه نمودن کوپن</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{route('coupons.store')}}" method="post" role="form">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">عنوان کوپن</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">کد</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" یک کد ویژه برای این کوپن بنویسید" name="code">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">قیمت</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" قیمت را بر حسب تومان وارد کنید" name="price">
                </div>

                <div class="form-group">
                    <label for="parent" class="col-sm-2 control-label">وضعیت را انتخاب کنید</label>
                    <div class="col-sm-10">
                        <select name="status">
                            <option value="0">فعال</option>
                            <option value="1">غیرفعال</option>
                        </select>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">ارسال</button>
            </div>
        </form>
    </div>
@endsection
