@extends('admin.layouts.master')
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#option").click(function () {
                if (this.checked) {
                    $(".checkBox").each(function () {
                        this.checked = true
                    })
                } else {
                    $(".checkBox").each(function () {
                        this.checked = false
                    })
                }
            })
        })
    </script>
@endsection
@section('context')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h2 class="box-title">لیست محصولات</h2>
                    @if (\Illuminate\Support\Facades\Session::has('product-delete'))
                        <div class="alert alert-error">{{Session('product-delete')}}</div>
                    @endif
                    <br><br>
                    <a class="btn btn-app pull-left" href="{{route('product.create')}}">
                        <i class="fa fa-plus"></i> جدید
                    </a>


                </div>
                <!-- /.box-header -->
                {{--                {!! Form::open(['route' => 'product.deleteSelected', 'method' => 'DELETE']) !!}--}}

                <div class="box-body table-responsive no-padding">
                    {{--                    <form action="/admin/productSelectedDelete" method="post">--}}
                    {!! Form::open(['route' => 'product.deleteSelected', 'method' => 'POST']) !!}

                    <select name="checkBoxArray" class="select2-dropdown">
                        <option value="delete">حذف</option>
                    </select>
                    <input type="submit" value="اعمال" name="submit" class="btn btn-danger">
                    <br>
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th><input type="checkbox" name="checkBoxArray" id="option"></th>
                            <th>عنوان</th>
                            <th>شناسه ی محصول</th>
                            <th>اسم مستعار</th>
                            <th> وضعیت</th>
                            <th> قیمت</th>
                            <th> تخفیف</th>
                            <th> توضیحات</th>
                            <th> برند</th>
                            <th>دسته بندی</th>
                            <th> تاریخ ایجاد</th>
                            <th> تاریخ به روز رسانی</th>
                            <th> ویرایش</th>
                            <th> نمایش</th>
                            <th> حذف</th>
                        </tr>

                        @foreach($products as $product)
                            <tr>
                                <td><input class="checkBox" type="checkbox" name="checkBoxArray[]"
                                           value="{{$product->id}}"></td>
                                {!! Form::close() !!}

                                <td><a href="product/{{$product->id}}/edit">{{$product->title}}</a></td>
                                <td>{{$product->sku}}</td>
                                <td>{{$product->slug}}</td>

                                @if ($product->status==0)
                                    <td>غیر فعال</td>
                                @else
                                    <td>فعال</td>
                                @endif

                                <td>{{$product->price}}</td>
                                <td>{{$product->discount_price}}</td>
                                <td><textarea readonly class="text-aqua">{{$product->description}}</textarea></td>
                                <td>{{$product->brand->name}}</td>
                                <td><a href="showProcatAttr">{{$product->category->name}}</a></td>
                                <td>
                                    {{$product->created_at}}
                                </td>

                                <td>
                                    {{($product->updated_at) }}
                                </td>

                                <td>
                                    <a href="product/{{$product->id}}/edit" class="btn btn-instagram">ویرایش</a>
                                </td>
                                <td>
                                    <a href="product/{{$product->id}}" class="btn btn-info">نمایش</a>
                                </td>
                                <td>
                                    {{ Form::open([ 'method'  => 'delete', 'route' => [ 'product.destroy', $product->id ] ]) }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br><br>
                   <product-list></product-list>

                </div>

                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
