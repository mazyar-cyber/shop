@extends('admin.layouts.master')
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#option3").click(function () {
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
                    <h2 class="box-title">لیست برندهای محصولات</h2>
                    {{--                    @if (\Illuminate\Support\Facades\Session::has('subcat'))--}}
                    {{--                        <div class="alert alert-error">{{Session('subcat')}}</div>--}}
                    {{--                    @endif--}}
                    <br><br>
                    <a class="btn btn-app pull-left" href="{{route('email.create')}}">
                        <i class="fa fa-plus"></i> جدید
                    </a>
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="جستجو">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    {{--                    {!! Form::open(['route' => 'email.selectedDel', 'method' => 'POST']) !!}--}}

                    <select name="checkBoxArray" class="select2-dropdown">
                        <option value="delete">حذف</option>
                    </select>
                    <input type="submit" value="اعمال" name="submit" class="btn btn-danger">
                    <br>
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th><input type="checkbox" name="checkBoxArray" id="option3"></th>
                            <th>موضوع</th>
                            <th>توضیحات</th>
                            <th>ایمیل پاسخگویی</th>
                            <th>وضعیت</th>
                            <th>تاریخ</th>
                            <th> ویرایش</th>
                        </tr>

                        @foreach($emails as $email)
                            <tr>
                                <td><input class="checkBox" type="checkbox" name="checkBoxArray[]"
                                           value="{{$email->id}}"></td>

                                <td>{{$email->subject}}</td>

                                <td>{!! (\Illuminate\Support\Str::limit($email->text, 121, '...')) !!}</td>
                                <td>{{$email->replyTo}}</td>
                                @if($email->status==1)
                                    <td>ارسال شده</td>
                                @else
                                    <td><span style="color: red">ارسال نشده </span></td>
                                @endif
                                <td>{{\Hekmatinasser\Verta\Verta::today($email->created_at)}}</td>

                                <td>
                                    <a href="email/{{$email->id}}/edit"
                                       class="btn btn-instagram">ویرایش</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--                    {!! Form::close() !!}--}}
                </div>

                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
