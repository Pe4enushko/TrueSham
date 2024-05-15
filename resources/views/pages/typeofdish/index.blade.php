@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    type_of_dish
</li>
@endsection
@section('header')
<h3><i class="fa fa-list"></i> type_of_dish </h3>
@endsection
@section('tools')
<a class="btn btn-secondary" href="{{route('typeofdish.create')}}">
    <span class="fa fa-plus"></span>
</a>
@endsection

@section('content')
<div class="row">
    @foreach($records as $record)
    <div class="col-sm-6">
        @include('cards.type_of_dish')
    </div>
    @endforeach
</div>
{!! $records->render() !!}
@endSection
