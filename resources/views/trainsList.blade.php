@extends('template.base')

@section('pageTitle', 'Trains List')

@section('mainContent')

    <div class="container">
        <div class="row mainrow">
            <div class="column">
                <h3>Company</h3>
            </div>
            <div class="column">
                <h3>Train Code</h3>
            </div>
            <div class="column">
                <h3>From</h3>
            </div>
            <div class="column">
                <h3>At</h3>
            </div>
            <div class="column">
                <h3>To</h3>
            </div>
            <div class="column">
                <h3>At</h3>
            </div>
            <div class="column">
                <h3>Coaches</h3>
            </div>
            <div class="column">
                <h3>Status</h3>
            </div>
        </div>
        @foreach ($trainsList as $train)
            <div class="row {{ $train->deleted ? 'deleted' : '' }}{{ !$train->on_time ? 'late' : ''}}">
                <div class="column">
                    <span>{{ $train->train_company }}</span>
                </div>
                <div class="column">
                    <span>{{ $train->train_code }}</span>
                </div>
                <div class="column">
                    <span>{{ $train->departure_railway }}</span>
                </div>
                <div class="column">
                    <span>{{ $train->departure_time }}</span>
                </div>
                <div class="column">
                    <span>{{ $train->destination_railway }}</span>
                </div>
                <div class="column">
                    <span>{{ $train->arrival_time }}</span>
                </div>
                <div class="column">
                    <span>{{ $train->n_couches }}</span>
                </div>
                <div class="column">
                    <span>
                        @if ($train->deleted)
                            Deleted
                        @elseif (!$train->on_time)
                                Late
                        @endif
                    </span>
                </div>
            </div>
        @endforeach
    </div>

@endsection
