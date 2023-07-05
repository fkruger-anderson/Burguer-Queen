@extends('TelaLayoutEmpresarial')
@section('title', 'Formas de Pagamento')
@section('lista')
    <h2>Formas de Pagamento</h2>
@endsection
@section('conteudo')

<div class="row container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Nome</th>
                <th>Prazo</th>
                <th>Parcela</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forma_pagamentos as $forma_pagamento)
            <tr>
                <td>{{ $forma_pagamento->id }}</td>
                <td>{{ $forma_pagamento->created_at}}</td>
                <td>{{ $forma_pagamento->nome_forma_pgto }}</td>
                <td><input type="checkbox" {{ $forma_pagamento->eh_prazo ? 'checked' : '' }}></td>
                <td>{{ $forma_pagamento->parcela}}</td>
                <td><input type="checkbox" {{ $forma_pagamento->eh_ativo_forma_pgto ? 'checked' : '' }}></td>
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