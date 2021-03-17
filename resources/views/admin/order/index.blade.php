@extends('admin.layouts.master')
@section('context')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> لیست فروش ها</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length"
                                                                                                aria-controls="example1"
                                                                                                class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>
                    <div class="col-sm-6">
                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                                                                 class="form-control input-sm"
                                                                                                 placeholder=""
                                                                                                 aria-controls="example1"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                               aria-describedby="example1_info">
                            <thead>
                            <tr role="row">

                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending" aria-label="موتور رندر: activate to sort column descending"
                                    style="width: 167px;">تعداد
                                </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending" aria-label="موتور رندر: activate to sort column descending"
                                    style="width: 167px;">مقدار خرید
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="مرورگر: activate to sort column ascending" style="width: 313px;">خریدار
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="شماره تلفن: activate to sort column ascending" style="width: 289px;">
                                    محصولات
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="شماره تلفن: activate to sort column ascending" style="width: 289px;">
                                    وضعیت پرداخت
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="شماره تلفن: activate to sort column ascending" style="width: 289px;">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $key=>$order)
                                <tr role="row" class="even">
                                    <td>{{$key+1}}</td>
                                    <td>{{number_format( $order->amount)}}</td>
                                    <td>{{$order->user->name}} <span>{{$order->user->lastname}}</span></td>
                                    <td>
                                        {{--                                      {{foreach($products=\App\Models\Order_Product::where('order_id',$order->id)->get() as $product)}}--}}
                                        @foreach(\App\Models\Order_Product::where('order_id',$order->id)->get() as $pivot)
                                            <a href="/admin/product/{{$pivot->product->id}}"><span>{{$pivot->product->title}}</span></a>
                                            <span style="color: #0b3e6f">به تعداد:{{$pivot->qty}}</span>
                                            <span>||</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($order->status==1)
                                            <span class="btn btn-success">پرداخت شده</span>
                                        @else
                                            <span class="btn btn-danger">پرداخت نشده</span>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="/admin/order/{{$order->id}}" class="btn btn-info">نمایش</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10
                            of 57 entries
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="example1_previous"><a href="#"
                                                                                                        aria-controls="example1"
                                                                                                        data-dt-idx="0"
                                                                                                        tabindex="0">Previous</a>
                                </li>
                                <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1"
                                                                      tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2"
                                                                tabindex="0">2</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3"
                                                                tabindex="0">3</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4"
                                                                tabindex="0">4</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5"
                                                                tabindex="0">5</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6"
                                                                tabindex="0">6</a></li>
                                <li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1"
                                                                                       data-dt-idx="7"
                                                                                       tabindex="0">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>@endsection
