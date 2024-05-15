

@extends('layouts.app')
@section('breadcrumb')
    <li class="breadcrumb-item">
        Menu
    </li>
@endsection
@section('header')
    <h3><i class="fa fa-list"></i> Menu </h3>
@endsection
@section('tools')
    <a class="btn btn-secondary" href="{{route('menu.create')}}">
        <span class="fa fa-plus"></span>
    </a>
@endsection

@section('content')
    

    <div class="row">
        @php($date = isset($date) ? $date->startOfMonth() : now()->startOfMonth())
<table class=" calendar m-auto border border-secondary border border-2" style="border-spacing:10px;border-collapse: separate;">
    <thead>
        <tr class="text-center text-uppercase text-secondary">
            <th colspan="7">{{ $date->format('F Y') }}</th>
        </tr>
    </thead>
    <thead >
        <tr class="text-muted text-center">
            <th>Пон.</th>
            <th>Вт.</th>
            <th>Ср.</th>
            <th>Четв.</th>
            <th>Пятн.</th>
            <th>Субб.</th>
            <th>Воскр.</th>
        </tr>
    </thead>
    <tbody class=" ">
        <tr>
            {{-- Day of the week isn't monday, add empty preceding column(s) --}}
            @if($date->format('N') != 1)
                <td colspan="{{ $date->format('N') - 1 }}"></td>
            @endif

            {{-- Get the total number of days in the month. --}}
            @php($daysInMonth = $date->daysInMonth)

            {{-- Go through each day of the month. --}}
            @for($i = 1; $i <= $daysInMonth; $i++)
                {{-- If we've reached monday, we'll create a new row. --}}
                @if($date->format('N') == 1)
                    </tr><tr>
                @endif

                {{-- Output the day. --}}
                <td class="text-center text-secondary rounded-circle bg-light border" rel="{{ $date->format('Y-m-d') }}">
                    <div style="height:40px;width:20px">
                        {{ $date->day }}
                        @if(in_array($date->day, $records)) 
                            <a href="{{ route('menu.show', $ids[$date->format('Y-m-d')]) }}">Меню</a>
                        @endif
                    </div>
                </td>

                {{-- Add another day and continue. --}}
                @php($date->addDay())
            @endfor

            {{-- Last date isn't sunday, append empty column(s). --}}
            @if($date->format('N') != 7)
                <td colspan="{{ (8 - $date->format('N')) }}"></td>
            @endif
        </tr>
    </tbody>
</table>
    </div>
    {{-- {!! $records->render() !!} --}}
@endSection
