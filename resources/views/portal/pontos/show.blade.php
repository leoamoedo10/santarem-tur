@extends('layouts.public')

@section('content')

@include('components.navbar')

<div class="container my-3" id="main-container">
    <header>
        <div class="heigth-img-show overflow-hidden">
            <img src="{{ asset('images/' . $attraction->image_path) }}" title="{{$attraction->name}}" itemprop="image" class="card-img-top">
        </div>
        <div class="border-bottom pt-2">
            <h1 itemprop="headline" class="card-title">{{$attraction->name}}</h1>
        </div>
        <section class="border-bottom my-3">
            <div class="mb-2">
                <address>
                    <strong>Endereço: </strong>
                    {{ $attraction->address }}
                </address>
            </div>
        </section>
    </header>
    <main itemprop="articleBody" class="">
        <p style="margin: 0px; font-stretch: normal; font-size: 17px; line-height: normal; text-size-adjust: auto; text-align: justify;">
            <span>
                {!! $attraction->informations !!}
            </span>
        </p>
    </main>
</div>

@include('components.footer')

@endsection
