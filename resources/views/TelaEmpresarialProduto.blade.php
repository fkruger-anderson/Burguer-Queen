@extends('TelaLayoutEmpresarial')
@section('title', 'Produtos')
@section('lista')
    <h2>Produtos</h2>
@endsection

@section('conteudo')

<div class="row container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cardápio</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome_produto }}</td>
                <td>{{ $produto->id_cardapio }}</td>
                <td>{{ $produto->preco_produto }}</td>
                <td>{{ $produto->created_at }}</td>
                <td><input type="checkbox" {{ $produto->eh_ativo_produto ? 'checked' : '' }}></td>
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