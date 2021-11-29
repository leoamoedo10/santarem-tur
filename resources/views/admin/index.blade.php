@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bem vindo(a), {{Auth::user()->name}}!</h1>
        <div class="row my-3">
            <div class="col">
                <a class="card" href="#">
                    <div class="card-body">Hotéis e Pousadas</div>
                </a>
            </div>
            <div class="col">
                <a class="card" href="#">
                    <div class="card-body">Culinária</div>
                </a>
            </div>
            <div class="col">
                <a class="card" href="#">
                    <div class="card-body">Pontos Turísticos</div>
                </a>
            </div>
            <div class="col">
                <a class="card" href="#">
                    <div class="card-body">Eventos</div>
                </a>
            </div>
        </div>
    </div>
@endsection
