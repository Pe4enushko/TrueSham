@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{route('dish.index')}}">dish</a>
</li>
<li class="breadcrumb-item">
    Create
</li>
@endsection
@section('header')
<h3><i class="fa fa-plus"></i> Create New dish</h3>
@endSection
@section('tools')

@endSection
@section('content')
<div class="row">
    <div class='col-md-12'>
        @include('forms.dish')
    </div>
</div>
@endSection
