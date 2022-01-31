@extends('layouts.public')

@section('content')

@include('components.navbar')

<div class="container my-3" id="main-container">
    <div class="border-bottom pt-2">
        <h1 itemprop="headline" class="card-title">{{$event->name}}</h1>
    </div>
    <main itemprop="articleBody" class="">
        <section class="border-bottom my-3">
            <div class="mb-2">
                <address>
                    <strong>Endereço: </strong>
                    {{ $event->address }}
                </address>
                <strong>Contato: </strong> {{ $event->contact }}
            </div>
        </section>
        <p style="margin: 0px; font-stretch: normal; font-size: 17px; line-height: normal; text-size-adjust: auto; text-align: justify;">
            <span>
                {!! $event->informations !!}
            </span>
        </p>
    </main>
</div>

@include('components.footer')

@endsection
