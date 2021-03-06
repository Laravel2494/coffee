@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

        {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".store"), "method" => "POST", 'enctype' => 'multipart/form-data']) !!}

            <div class="breadcomb-list col-md-12">
                <div class="form-element-list">

                    <center>

                        <div class="basic-tb-hd">
                            <h2>{{ $title }}</h2>
                        </div>

                        <div class="row">

                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="title" type="text" class="form-control" placeholder="Называние прогресса">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="value" type="number" min="1" max="10000" class="form-control" placeholder="Значение прогресса">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label class="">
                                        <div class="icheckbox_square-green" style="position: relative;">
                                            <input type="checkbox" name="active" class="i-checks" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        Активировать
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                </center>

                <button class="btn btn-success notika-btn-success waves-effect col-lg-12">Создать</button>
            </div>
        {!! Form::close() !!}


        {{-- <div class="dropdone-nk mg-t-30">
            <div class="cmp-tb-hd">
                <h2>Drag and Drop File Uploader</h2>
                <p>DropzoneJS is an open source library that provides Drag and Drop file uploads with image previews. It’s lightweight, doesnt depend on any other library (like jQuery) and is highly customizable.</p>
            </div>
            <div id="dropzone1" class="multi-uploader-cs">
                <form action="/upload" class="dropzone dropzone-nk needsclick" id="demo1-upload">
                    <div class="dz-message needsclick download-custom">
                        <i class="notika-icon notika-cloud"></i>
                        <h2>Drop files here or click to upload.</h2>
                        <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                        </p>
                    </div>
                </form>
            </div>
        </div> --}}

    </div>
    {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="normal-table-list">

            <div class="basic-tb-hd">
                <h2>{{ $infoCurrentRoute['title'] }}</h2>
            </div>

            <div class="bsc-tbl">
                <table class="table table-sc-ex">
                    <thead>
                        <tr>
                            <th>Фоновый изображение</th>
                            <th>Текст</th>
                            <th>Ссылка</th>
                            <th>Действие</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>iamge</td>
                            <td>Christopher</td>
                            <td>@makinton</td>
                            <td>Ducky</td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div> --}}
@endsection
