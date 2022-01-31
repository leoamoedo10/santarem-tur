@extends('layouts.public')

@section('content')

@include('components.navbar')

<div class="container my-3">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Culinária</h1>
        </div>
    </div>
</div>
<div class="container">
    @foreach ($culinaries as $culinary)
    <div class="card mb-3 shadow-sm">
        <div class="row no-gutters">
            <div class="col-md-4 heigth-img overflow-hidden">
                <img src="{{ asset('images/' . $culinary->image_path) }}" title="{{$culinary->name}}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <a href="{{ route('culinary.show', $culinary) }}" class="link-default"><h5 class="card-title">{{$culinary->name}}</h5></a>
                    <p class="card-text">{{$culinary->informations}}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>

@include('components.footer')

@endsection
