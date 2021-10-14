@extends('layouts.public')

@section('content')

@include('components.navbar')

<div class="container my-3">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Pontos Turísticos</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4 heigth-img overflow-hidden">
                <img src="/images/museu-joao-fona.jpg" title="Museu João Fona" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Museu João Fona</h5>
                    <p class="card-text">Informações</p>
                    <p class="card-text">
                        <small class="text-muted">Um texto interessante</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4 heigth-img overflow-hidden">
                <img src="/images/alter-do-chao.jpg" title="Alter do Chão" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Alter do Chão</h5>
                    <p class="card-text">Informações</p>
                    <p class="card-text">
                        <small class="text-muted">Um texto interessante</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.footer')

@endsection
