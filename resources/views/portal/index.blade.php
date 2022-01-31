@extends('layouts.public')
@section('content')

    @include('components.navbar')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-5">
                <img src="images/santarem.jpg" class="card-img-top img-fluid" />
                <small class="img-author">Autor: Desconhecido</small>
            </div>
            <div class="col-md-7 text-center px-3">
                <h2>CONHEÇA SANTARÉM</h2>
                <p>
                    A cidade das mil e uma maravilhas, é privilegiada por ser riquíssima em diversidade, belezas e
                    tradições. Os encantos naturais do município o fazem um dos pontos turísticos mais visitados do Brasil.
                    Viver Santarém, é pedir para se apaixonar por esse local de cultura, religiosidade, gastronomia, praias,
                    florestas e muito mais...
                </p>
            </div>
        </div>
    </div>
    <div class="bg-background">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-8 text-center">
                    <p>
                        Que tal nosso pôr do sol na Orla de Santarém, de frente para o Encontro das Águas? O que acha de
                        visitar e curtir Alter do Chão, Ponta de Pedras, Catedral da Matriz de N. S. da Conceição, Casa da
                        Cultura, Praça do Mirante, Parque Municipal, Bosque Vera Paz, Lago do Maicá, Orla da Vila Arigó,
                        Ponta Grande, Ponta do Cururu, Floresta Nacional do Tapajós, Rio Arapiuns e tantos outros pontos
                        turísticos? Venha e se encante por Santarém, a “Pérola do Tapajós”.
                    </p>
                </div>
                <div class="col-md-4">
                    <iframe class="w-100" height="315" src="https://www.youtube.com/embed/hfn1BCGtmbI"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

@endsection
