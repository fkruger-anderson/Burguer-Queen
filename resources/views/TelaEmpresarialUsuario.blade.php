@extends('TelaLayoutEmpresarial')
@section('title', 'Usuários')

@section('lista')
    <h2>Usuários</h2>
@endsection

@section('adicionar')
    <button class="btn">Adicionar</button>
@endsection

@section('conteudo')

<div class="row container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Cliente</th>
                <th>Funcionário</th>
                <th>Sócio</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->telefone}}</td>
                <td><input type="checkbox" {{ $user->eh_cliente == 1 ? 'checked' : '' }}></td>
                <td><input type="checkbox" {{ $user->eh_funcionario == 1 ? 'checked' : '' }}></td>
                <td><input type="checkbox" {{ $user->eh_socio == 1 ? 'checked' : '' }}></td>
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