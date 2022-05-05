@extends('template.base')

@section('pageTitle', 'Trains List')

@section('mainContent')
    <ul>
        @foreach ($trainsList as $train)
            <li>{{ $train->train_code }}</li>
        @endforeach
    </ul>
@endsection
