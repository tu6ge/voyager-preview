@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.__('voyager::generic.database'))

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-data"></i> {{ __('voyager::generic.bread') }}
    </h1>
@stop

@section('content')


<div class="page-content container-fluid">
    <div class="alerts">
        <div class="alert alert-warning ">
            演示账号不提供BREAD操作功能，如需了解更多，请自行安装体验，查看<a href="http://doc.laravel-voyager.cn/" target="_blank" >文档</a>了解更多
        </div>
    </div>
</div>


@endsection