@extends('layouts.login')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center alert-secondary">
                    <h3>Autenticação</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                                <button type="submit" class="btn btn-primary">
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
