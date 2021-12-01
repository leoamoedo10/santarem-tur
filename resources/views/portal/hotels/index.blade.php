@extends('layouts.public')

@section('content')

@include('components.navbar')

<div class="container my-3" id="main-container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Hotéis e Pousadas</h1>
        </div>
    </div>
</div>
<div class="container">
    @foreach ($hotels as $hotel)
        <div class="card mb-3 shadow-sm">
            <div class="row no-gutters">
                <div class="col-md-4 heigth-img overflow-hidden">
                    <img src="{{$hotel->image}}" title="{{$hotel->name}}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="{{ route('hotels.show', $hotel) }}" class="link-default"><h5 class="card-title">{{$hotel->name}}</h5></a>
                        <p class="card-text">{{$hotel->informations}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@include('components.footer')

@endsection
