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

    <a href="{{route('admhotels.create')}}" class="btn bg-default">Cadastrar Novo</a>
    <table class="table table-light table-hover rounded my-3">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th>Nome</th>
                <th>Contato</th>
                <th>Endereço</th>
                <th colspan="2" class="text-center">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <td>{{$hotel->id}}</td>
                    <td>{{$hotel->name}}</td>
                    <td>{{$hotel->contact}}</td>
                    <td>{{$hotel->address}}</td>
                    <td class="text-end">
                        <a class="btn btn-outline-secondary btn-sm" title="Editar" href="{{ route('admhotels.edit', $hotel) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td class="text-start">
                        <form method="post" action="{{ route('admhotels.destroy', $hotel) }}">
                            @method('DELETE')
                            @csrf

                            <button
                                title="Excluir"
                                type="submit"
                                class="btn btn-outline-danger btn-sm"
                                onclick="return confirm('Deseja apagar este item?')"
                            >
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
