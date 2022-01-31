@extends('layouts.public')

@section('content')

@include('components.navbar')

<div class="container my-3" id="main-container">
    <header>
        <div class="heigth-img-show overflow-hidden">
            <img src="{{ asset('images/' . $culinary->image_path) }}" title="{{$culinary->name}}" itemprop="image" class="card-img-top">
        </div>
        <div class="border-bottom pt-2">
            <h1 itemprop="headline" class="card-title">{{$culinary->name}}</h1>
        </div>
    </header>
    <main itemprop="articleBody" class="">
        <p style="margin: 0px; font-stretch: normal; font-size: 17px; line-height: normal; text-size-adjust: auto; text-align: justify;">
            <span>
                {!! $culinary->informations !!}
            </span>
        </p>
    </main>
</div>

@include('components.footer')

@endsection
