@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{route('product.index')}}">product</a>
</li>
<li class="breadcrumb-item">
    <a href="{{route('product.show',$model->Code_product)}}">{{$model->Code_product}}</a>
</li>
<li class="breadcrumb-item">
    Edit
</li>
@endsection
@section('header')
<h3><i class="fa fa-pencil"></i> Edit {{$model->Code_product}}</h3>
@endSection

@section('tools')
<a class="btn btn-secondary" href="{{route('product.create')}}">
    <span class="fa fa-plus"></span>
</a>
@endsection

@section('content')
<div class="row">
    <div class='col-md-12'>
        <div class='card'>
            <div class="card-body">
                @include('forms.product',[
                'route'=>route('product.update',$model->Code_product),
                'method'=>'PUT'
                ])
            </div>
        </div>
    </div>
</div>
@endSection
