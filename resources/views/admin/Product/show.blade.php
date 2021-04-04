@extends('admin.layouts.master')
@section('context')
    <div class="row">
        <div class="col-xs-12">
            <a href="http://shop/admin/product/{{$product->id}}/edit " class="btn btn-app pull-left"><i
                    class="fa fa-edit"></i> ویرایش
            </a>
            <h1>محصول {{$product->title}}</h1>
            <img src="/storage/photos/product/{{$product->photo_path}}" alt="product-pic" width="300px"
                 class="center-block">
            <div class="form-group">

                <div class="form-group">
                    <label class="col-sm-2 control-label">دسته بندی</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$cat->name}}"
                               name="sku" readonly>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <label class="col-sm-2 control-label">برند</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$brand->name}}"
                               name="sku" readonly>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <label class="col-sm-2 control-label">عکس</label>

                    <div class="col-sm-10">
                        <img src="/storage/photos/brand/{{$brand->photo_path}}" alt="brand_pic" width="200px">
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <label class="col-sm-2 control-label">قیمت</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$product->price}}هزارتومن"
                               readonly>
                    </div>
                </div>
                <br>

                @foreach($allData as $p)
                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{$p['propTitle']}}</label>
                        <div class="col-sm-10">
                            @if(!$p[0])
                                <div class="col-md-6">
                                    <div class="alert alert-danger">شما هنوز مقداری برای این ویژگی در نظر نگرفته اید!
                                    </div>
                                </div>
                            @else
                                <input type="text" class="form-control" value="{{$p[0]->title}}"
                                       name="sku" readonly>
                            @endif
                        </div>

                    </div>
                @endforeach


                {{--                @for($i=0;$i<count($cat->property);$i++)--}}
                {{--                    <div class="form-group">--}}
                {{--                        <label class="col-sm-2 control-label">{{$cat->property[$i]->title}}</label>--}}
                {{--                        @if(count($product->propertyValue)>$i)--}}
                {{--                            <div class="col-sm-10">--}}
                {{--                                <input type="text" class="form-control" value="{{$product->propertyValue[$i]->title}}"--}}
                {{--                                       name="sku" readonly>--}}
                {{--                            </div>--}}
                {{--                        @else--}}
                {{--                            <div class="col-sm-10">--}}
                {{--                                <div class="alert alert-danger">شما هنوز مقداری برای این ویژگی در نظر نگرفته اید!</div>--}}
                {{--                            </div>--}}
                {{--                        @endif--}}
                {{--                    </div>--}}
                {{--                @endfor--}}


            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
