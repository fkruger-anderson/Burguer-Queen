@extends('TelaLayoutEmpresarial')
@section('title', 'Ingredientes')

@section('lista')
    <h2>Ingredientes</h2>
@endsection

@section('conteudo')

<div class="row container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Nome</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingredientes as $ingrediente)
            <tr>
                <td>{{ $ingrediente->id }}</td>
                <td>{{ $ingrediente->created_at}}</td>
                <td>{{ $ingrediente->nome_ingrediente }}</td>
                <td><input type="checkbox" {{ $ingrediente->eh_ativo_ingrediente ? 'checked' : '' }}></td>
                <td>
                    <button class="btn-edit">Alterar</button>
                    <button class="btn-delete">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

