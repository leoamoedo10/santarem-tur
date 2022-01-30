@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bem vindo(a), {{Auth::user()->name}}!</h1>
        <div class="row my-3">
            <div class="col">
                <a class="height-card card border-0 overflow-hidden shadow-sm link-default" href="{{route('admhotels.index')}}">
                    <div class="card-body p-0 d-flex">
                        <div class="width-icon bg-icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-hotel fa-4x"></i>
                        </div>
                        <div class="d-flex py-3 px-2 align-items-center">
                            <h6 class="style-font">Hotéis e Pousadas</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="height-card card border-0 overflow-hidden shadow-sm link-default" href="{{route('admculinaries.index')}}">
                    <div class="card-body p-0 d-flex">
                        <div class="width-icon bg-icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-utensils fa-4x"></i>
                        </div>
                        <div class="d-flex py-3 px-2 align-items-center">
                            <h6 class="style-font">Culinária</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="height-card card border-0 overflow-hidden shadow-sm link-default" href="{{route('admattractions.index')}}">
                    <div class="card-body p-0 d-flex">
                        <div class="width-icon bg-icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-umbrella-beach fa-4x"></i>
                        </div>
                        <div class="d-flex py-3 px-2 align-items-center">
                            <h6 class="style-font">Pontos Turísticos</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="height-card card border-0 overflow-hidden shadow-sm link-default" href="{{route('admevents.index')}}">
                    <div class="card-body p-0 d-flex">
                        <div class="width-icon bg-icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-glass-cheers fa-4x"></i>
                        </div>
                        <div class="d-flex py-3 px-2 align-items-center">
                            <h6 class="style-font">Eventos</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
