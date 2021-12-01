@extends('layouts.login')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach($errors->all() as $error)
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @endforeach
                </div>
            @endif
            <div class="card">
                <div class="card-header text-center bg-container">
                    <h3 class="text-white">Autenticação</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <small class="text-muted fw-semi">Insira seus dados para acessar ao sistema</small>
                        <hr class="my-1">
                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-right">E-mail</label>
                            <div class="col">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                            </div>

                            <label for="password" class="col-form-label text-md-right">Senha</label>
                            <div class="col">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>

                            <div class="col d-flex justify-content-end mt-3">
                                <button type="submit" class="btn bg-default">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
