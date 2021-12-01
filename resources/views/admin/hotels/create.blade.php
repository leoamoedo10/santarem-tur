@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 text-muted">
            Preencha os dados do formulário ao lado para cadastrar um novo item na categoria <strong>Hotéis e Pousadas</strong>.
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admhotels.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="contact" class="form-label">Contato</label>
                                <input type="text" class="form-control" id="contact" name="contact">
                            </div>
                            <div class="col-md-8">
                                <label for="address" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="informations" class="form-label">Descrição</label>
                            <textarea class="form-control" name="informations" id="informations" rows="5"></textarea>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="image" class="form-label">Imagem</label>
                            <input type="file" class="form-control" name="image">
                        </div> --}}
                        <div class="d-flex justify-content-end">
                            <button class="btn bg-default" type="submit">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
