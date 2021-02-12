@extends('admin.layouts.master')
@section('context')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">ویرایش محصول</h3>
            @include('admin.partial.error')
            @if (\Illuminate\Support\Facades\Session::has('product-save'))
                <div class="alert alert-success">{{Session('product-save')}}</div>
            @endif
            <br><br>
            <a class="btn  pull-right" href="{{route('product.index')}}">
                <i class="fa fa-list"></i> لیست محصولات
            </a>
            <a href="http://shop/admin/product/{{$product->id}}" class="btn btn-app pull-left"><i class="fa fa-list-alt"></i> نمایش
            </a>

        </div>
        <div>
            <img src="/storage/photos/product/{{$product->photo_path}}" width="200px" alt="pic_img">
        </div>
        <div class="col-md-6">
        <div class="alert alert-info ">در صورت پر نکردن ویژگی های مربوط به محصول تغییری در آن داده نخواهد شد</div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="{{route('product.update',$product->id)}}" method="post"
                  enctype="multipart/form-data">
                {{method_field('PATCH')}}
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> نام محصول</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" نام محصول"
                                   name="title" value="{{$product->title}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> شناسه محصول</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" شناسه محصول"
                                   name="sku" value="{{$product->sku}}" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> نام مستعار محصول</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder=" نام مستعار محصول"
                                   name="slug" value="{{$product->slug}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> قیمت</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3"
                                   placeholder=" قیمت محصول را وارد کنید"
                                   name="price" value="{{$product->price}}" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> تخفیف</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3"
                                   placeholder=" مقدار مبلغ تخفیف را اینجا وارد کنید"
                                   name="discount_price" value="{{$product->discount_price}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="parent" class="col-sm-2 control-label">وضعیت را انتخاب کنید</label>
                        <div class="col-sm-10">
                            <select name="status">
                                <option value="0" selected="@if($product->status==0)selected @endif">فعال</option>
                                <option value="1" selected="@if($product->status==1)selected @endif">غیرفعال</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand" class="col-sm-2 control-label">برند محصول؟</label>
                        <div class="col-sm-10">
                            <select name="brand">
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}"
                                            selected="@if($product->brand_id==$brand->id)selected @endif">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <product :cats="{{$cats}}" :selected="{{$product->cat_id}}"></product>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> توضیحات</label>

                        <div class="col-sm-10">
                            <textarea name="description"
                                      class="form-control">{{$product->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"> عکس</label>

                        <div class="col-sm-10">
                            <input type="file" name="pic" class="form-control">
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-app pull-left" name="btn"><i class="fa fa-save"></i>ویرایش
                        </button>
                    </div>
                    <!-- /.box-footer -->
            </form>
        </div>
    </div>
@endsection
<script>
    import Product from "../../../js/components/Product";

    export default {
        components: {Product}
    }
</script>
