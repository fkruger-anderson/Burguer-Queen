@extends('TelaLayoutEmpresarial')
@section('title', 'Privilégios')

@section('lista')
    <h2>Privilégios</h2>
@endsection

@section('adicionar')
    <button class="btn">Gerir</button>
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
            @foreach ($privilegios as $privilegio)
            <tr>
                <td>{{ $privilegio->id }}</td>
                <td>{{ $privilegio->created_at}}</td>
                <td>{{ $privilegio->nome_privigelio}}</td>
                <td><input type="checkbox" {{ $privilegio->eh_ativo_privilegio ? 'checked' : '' }}></td>
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