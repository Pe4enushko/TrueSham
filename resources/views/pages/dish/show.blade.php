@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{route('dish.index')}}">dish</a>
</li>
<li class="breadcrumb-item">
    {{$record->Code_dish}}
</li>

@endsection
@section('header')
<h3><i class="fa fa-eye"></i> {{$record->Code_dish}}</h3>
@endsection
@section('tools')
<div class="btn-group">

<a class="btn btn-secondary" href="{{route('dish.create')}}">
    <span class="fa fa-plus"></span>
</a>
<a class="btn btn-secondary" href="{{route('dish.edit',$record->Code_dish)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('dish.destroy',$record->Code_dish)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form>

</div>
@endsection

@section('content')

<div class="row">
    <div class="col-sm-4">
        @include('cards.dish')
    </div>
</div>
@endSection
