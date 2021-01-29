@extends('admin.layouts.master')
@section('context')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">اضافه نمودن ویژگی به دسته بندی</h3>
            @include('admin.partial.error')
            <br><br>
            <a class="btn  pull-right" href="{{route('procat.index')}}">
                <i class="fa fa-list"></i> لیست دسته بندی
            </a>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="{{route('giveProcatAttr')}}" method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="parent" class="col-sm-2 control-label">دسته بندی را انتخاب کنید</label>
                        <div class="col-sm-10">
                            <select name="cat">
                                @foreach($proCat as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="parent" class="col-sm-2 control-label">ویژگی یا ویژگی ها را انتخاب کنید</label>
                        <div class="col-sm-10">
                            <select  multiple name="props[]">
                                @foreach($props as $prop)
                                    <option value="{{$prop->id}}">{{$prop->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-app pull-left" name="btn"><i class="fa fa-save"></i>ذخیره
                        </button>
                    </div>
                    <!-- /.box-footer -->
            </form>
        </div>
    </div>
@endsection
