@extends('admin.layouts.master')
@section('context')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">اضافه نمودن ایمیل</h3>
            @include('admin.partial.error')
            @if (\Illuminate\Support\Facades\Session::has('email-send'))
                <div class="alert alert-success">
                    {{session('email-send')}}
                </div>
            @endif
            <br><br>
            <a class="btn  pull-right" href="{{route('email.index')}}">
                <i class="fa fa-list"></i> لیست ایمیل
            </a>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="{{route('email.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> موضوع ایمیل</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3"
                                   name="subject" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> متن ایمیل</label>

                        <div class="col-sm-10">
                            <input type="text" id="mytextarea" name="text">
                        </div>

                        {{--                        <div id="toolbar-container"></div>--}}

                        {{--                        <!-- This container will become the editable. -->--}}

                        {{--                        <div id="editor">--}}
                        {{--                            <textarea name="text" cols="30" rows="10"></textarea>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="col-sm-10" id="editor">--}}
                        {{--                            <p>this is dsdf</p>--}}
                        {{--                            <p id="editor" class="form-control" name="text">--}}
                        {{--                        </div>--}}
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">ایمیل پاسخ</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="replyTo"
                                   placeholder="ایمیلی که کاربر به صورت پیش فرض قرار است به آن پاسخ دهد">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="parent" class="col-sm-2 control-label"> کاربران را انتخاب کنید</label>
                        <div class="col-sm-10">
                            <select name="users[]" multiple>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->email}}==>{{$user->name}}
                                        .{{$user->lastname}}</option>
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
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    {{--    <script>--}}
    {{--        ClassicEditor--}}
    {{--            .create(document.querySelector('#editor'))--}}
    {{--            .catch(error => {--}}
    {{--                console.error(error);--}}
    {{--            });--}}
    {{--    </script>--}}

    {{--    <script>--}}
    {{--        DecoupledEditor--}}
    {{--            .create(document.querySelector('#editor'))--}}
    {{--            .then(editor => {--}}
    {{--                const toolbarContainer = document.querySelector('#toolbar-container');--}}

    {{--                toolbarContainer.appendChild(editor.ui.view.toolbar.element);--}}
    {{--            })--}}
    {{--            .catch(error => {--}}
    {{--                console.error(error);--}}
    {{--            });--}}
    {{--    </script>--}}


{{--    <script>--}}
{{--        // Replace the <textarea id="editor1"> with a CKEditor 4--}}
{{--        // instance, using default configuration.--}}
{{--        CKEDITOR.replace('editor1');--}}
{{--    </script>--}}

@endsection
