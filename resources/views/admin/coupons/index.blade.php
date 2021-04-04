@extends('admin.layouts.master')
@section('context')
    <div class="box">
        @if (\Illuminate\Support\Facades\Session::has('coupon-delete'))
            <div class="alert alert-success">
                {{session('coupon-delete')}}
            </div>
        @endif
        <div class="box-header">
            <h3 class="box-title"> لیست کوپن ها</h3>
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
                                    style="width: 167px;"> عنوان کوپن
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="مرورگر: activate to sort column ascending" style="width: 313px;">کد
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="شماره تلفن: activate to sort column ascending" style="width: 289px;">
                                    قیمت
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="شماره تلفن: activate to sort column ascending" style="width: 289px;">
                                    وضعیت
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    style="width: 289px;">
                                    ویرایش
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    style="width: 289px;">

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coupons as $coupon)
                                <tr role="row" class="even">
                                    <td>{{$coupon->title}}</td>
                                    <td>{{$coupon->code}}</td>
                                    <td>{{$coupon->price}}</td>
                                    @if($coupon->status==1)
                                        <td><a href="/admin/changeCoupon/1/{{$coupon->id}}" class="btn btn-app"><span
                                                    class="fa fa-thumbs-o-up"></span>فعال</a></td>
                                    @endif
                                    @if($coupon->status==0)
                                        <td><a href="/admin/changeCoupon/0/{{$coupon->id}}" class="btn btn-app"><span
                                                    class="fa fa-thumbs-o-down"></span>غیر فعال</a></td>
                                    @endif
                                    <td><a href="/admin/coupons/{{$coupon->id}}/edit" class="btn btn-warning">edit</a>
                                    </td>
                                    <td>
                                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'coupons.destroy', $coupon->id ] ]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{--                            <tfoot>--}}
                            {{--                            </tfoot>--}}
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
