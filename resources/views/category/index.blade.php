@extends('base_layout.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">@lang('category.search')</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="GET">
                     <div class="form-group">
                        <label for="name">@lang('category.name')</label>
                         <input type="text" name="name" class="form-control" value="{{app('request')->input('name')}}"/>
                    </div>
                    <div class="form-group">
                        <label for="lang">@lang('category.language')</label>
                        <select name="lang" class="select form-control">
                            <option value="-1">@lang('category.choose_language')</option>
                            <option value="En" {{app('request')->input('lang')=='En'?'selected':''}}>@lang('category.lang.en')</option>
                            <option value="Ar" {{app('request')->input('lang')=='Ar'?'selected':''}}>@lang('category.lang.ar')</option>
                        </select>
                    </div>
                        <div class="form-actions">
                            <input type="submit" value="{{trans('category.search')}}" class="btn btn-primary">
                            <a href="{{route('category.index')}}" class="btn btn-default">@lang('category.cancel')</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <form action="{{route('category.create')}}" class="form-actions " method="GET">
        <input type="submit" value="{{trans('category.addition')}}" class="btn btn-primary  border border-green" />
    </form>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">@lang('category.categories')</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead>
                        <tr>
                        <th>@lang('category.name')</th>
                        <th>@lang('category.language')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->lang=='En'?trans('category.lang.en'):trans('category.lang.ar')}}</td>
                            <td style="text-align: center"><a class="btn btn-primary"
                               href={{route('category.edit',['id'=>$category->id])}}><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger remove-category"
                                   data-value="{{$category->id}}"
                                ><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 text-right">
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.remove-category').click(function () {
            var id=$(this).data('value');
            console.log(id);
        swal({
                title: "Are you sure?",
                text: "Do you want delete category ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(){
            window.location='{{route('category.destroy')}}/'+id;
            });
        });
    </script>
@endsection
