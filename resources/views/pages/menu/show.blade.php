@extends('layouts.app')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{route('menu.index')}}">Menu</a>
    </li>

@endsection

@section('content')
    <div class="row">
        @foreach ($records as $record)
            <div class="col-sm-6">
                @include('cards.menu')
            </div>
        @endforeach
    </div>
@endSection
