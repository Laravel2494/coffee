@extends('admin.layouts.app_admin')

@section('status')
    @include("admin.includes.status")
@endsection

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

        {!! Form::open(["url" => route("admin." . $infoCurrentRoute['slug'] . ".store"), "method" => "POST"]) !!}

            <div class="breadcomb-list col-md-12">
                <div class="form-element-list">

                    <center>
                        <div class="basic-tb-hd">
                            <h2>{{ $title }}</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input name="email" type="text" class="form-control" placeholder="email@gmail.com">
                                    </div>
                                </div>
                            </div>

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
                    </center>

                </div>
                <button class="btn btn-success notika-btn-success waves-effect col-lg-12">Создать</button>
            </div>

        {!! Form::close() !!}

    </div>
@endsection
