@extends('layouts.app')

@section('content')
<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endforeach
        </div>
    @elseif (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-5 text-muted">
            Preencha os dados do formulário ao lado para cadastrar um novo item na categoria <strong>Hotéis e Pousadas</strong>.
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admhotels.update', $hotel) }}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$hotel->name}}">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="contact" class="form-label">Contato</label>
                                <input type="text" class="form-control" id="contact" name="contact" value="{{$hotel->contact}}">
                            </div>
                            <div class="col-md-8">
                                <label for="address" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{$hotel->address}}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="informations" class="form-label">Descrição</label>
                            <textarea class="form-control" name="informations" id="informations" rows="5">{{$hotel->informations}}</textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn bg-default" type="submit">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
