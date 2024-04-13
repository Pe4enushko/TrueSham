@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{route('dish.index')}}">dish</a>
</li>
<li class="breadcrumb-item">
    <a href="{{route('dish.show',$model->Code_dish)}}">{{$model->Code_dish}}</a>
</li>
<li class="breadcrumb-item">
    Edit
</li>
@endsection
@section('header')
<h3><i class="fa fa-pencil"></i> Edit {{$model->Code_dish}}</h3>
@endSection

@section('tools')
<a class="btn btn-secondary" href="{{route('dish.create')}}">
    <span class="fa fa-plus"></span>
</a>
@endsection

@section('content')
<div class="row">
    <div class='col-md-12'>
        <div class='card'>
            <div class="card-body">
                @include('forms.dish',[
                'route'=>route('dish.update',$model->Code_dish),
                'method'=>'PUT'
                ])
            </div>
        </div>
    </div>
</div>
@endSection
