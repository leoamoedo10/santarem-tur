@extends('layouts.public')

@section('content')

@include('components.navbar')

<div class="container my-3">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Eventos</h1>
        </div>
    </div>
</div>
<div class="container my-3">
    @foreach ($events as $event)
        <div class="bg-light rounded shadow-sm">
            <ul class="list-group rounded list-group-flush">
                <a class="list-group-item list-group-item-action flex-column align-items-start pt-2 px-3 pb-0" href="{{ route('event.show', $event) }}">
                    <div class="d-flex mb-1 w-100 justify-content-between">
                        <small class="font-weight-bold">{{$event->address}}</small>
                        <small class="font-weight-bold">{{$event->informations}}</small>
                    </div>
                    <h5>{{$event->name}}</h5>
                </a>
            </ul>
        </div>
    @endforeach
</div>

@include('components.footer')

@endsection
