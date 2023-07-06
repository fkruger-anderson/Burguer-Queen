@extends('TelaLayoutEmpresarial')
@section('title', 'Produtos')
@section('lista')
    <h2>Promoções</h2>
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
                <th>Data Início</th>
                <th>Data Fim</th>
                <th>Nome</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promocoes as $promocao)
            <tr>
                <td>{{ $promocao->id }}</td>
                <td>{{ $promocao->data_inicial_promocao }}</td>
                <td>{{ $promocao->data_final_promocao }}</td>
                <td>{{ $promocao->nome_promocao }}</td>
                <td><input type="checkbox" {{ $promocao->eh_ativo_promocao ? 'checked' : '' }}></td>
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

