@extends('admin.layouts.master')
@section('context')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h2 class="box-title">سفارش شماره {{$order[0]->id}}</h2>
                </div>
                <div class="box-body table-responsive no-padding">
                    <br>
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>نام محصول</th>
                            <th>عکس</th>
                        </tr>

                        @foreach($order[0]->product as $product)
                            <tr>
                                <td><a href="/admin/product/{{$product->product->id}}">{{$product->product->title}}</a>
                                </td>

                                <td>
                                    <img width="223px" src="/storage/photos/product/{{$product->product->photo_path}}"
                                         alt="product_pic">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="custom-control">
                        <strong>نام خریدار</strong>
                        <p>{{$order[0]->user->name.' '.$order[0]->user->lastname}}</p>
                        <br>
                        <strong>شماره تلفن</strong>
                        <p>{{$order[0]->user->phone}}</p>
                        <br>
                        <strong> استان</strong>
                        <p>{{$order[0]->user->address->province->name}}</p>
                        <br>
                        <strong> شهرستان</strong>
                        <p>{{$order[0]->user->address->city->name}}</p>
                        <br>
                        <strong> آدرس</strong>
                        <p>{{$order[0]->user->address->address1}}</p>
                        <br>
                        <strong> کد پستی</strong>
                        <p>{{$order[0]->user->address->postalCode}}</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
