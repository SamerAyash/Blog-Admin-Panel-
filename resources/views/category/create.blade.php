@extends('base_layout.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="col-md-12" style="text-align: center">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">@lang('category.select_image') </span>
                                                                <span class="fileinput-exists">@lang('category.change')</span>
                                                                <input type="file" name="category_image"> </span>
                                <a href="javascript:" class="btn red fileinput-exists" data-dismiss="fileinput">@lang('category.remove')</a>
                            </div>
                        </div>
                        <div class="alert-danger">{{$errors->first('category_image')}}</div>
                    </div>
                    <div class="form-group">
                        <lable for="name">@lang('category.name')</lable>
                        <input type="text" class="form-control" name="name">
                        <div class="alert-danger">{{$errors->first('name')}}</div>
                    </div>
                    <div class="form-group">
                        <lable for="name">@lang('category.language')</lable>
                        <select name="lang" id="lang" class="form-control">
                            <option value="En">@lang('category.lang.en')</option>
                            <option value="Ar">@lang('category.lang.ar')</option>
                        </select>
                        <div class="alert-danger">{{$errors->first('lang')}}</div>

                    </div>
                    <div class="form-action">
                        <input type="submit" value="{{trans('category.save')}}" class="btn btn-primary"/>
                        <a href="{{route('category.index')}}" class="btn btn-default">@lang('category.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection