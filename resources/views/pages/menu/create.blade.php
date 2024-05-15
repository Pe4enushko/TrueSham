@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{route('menu.index')}}">Меню</a>
</li>
<li class="breadcrumb-item">
    Добавить
</li>
@endsection
@section('header')
<h3><i class="fa fa-plus"></i>Добваить новое меню</h3>
@endSection
@section('tools')

@endSection
@section('content')
<div class="row">
    <div class='col-md-12'>
        @include('forms.Menu')
    </div>
</div>
@endSection
