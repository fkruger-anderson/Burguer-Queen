@extends('TelaLayoutEmpresarial')
@section('title', 'Formas de Pagamento')
@section('lista')
    <h2>Fretes Específicos</h2>
@endsection
@section('conteudo')

<div class="row container">
    <form action="{{ route('search-ingredientes') }}" method="POST">
        @csrf <!-- Adicione o token CSRF para proteção -->
        <input type="text" name="nome_frete" placeholder="Nome do Frete">
        <button class="btn" type="submit">Buscar</button>
    </form>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Preço</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingredientes as $ingrediente)
            <tr>
                <td>{{ $ingrediente->id }}</td>
                <td>{{ $ingrediente->cidade }}</td>
                <td>{{ $ingrediente->bairro }}</td>
                <td>{{ $ingrediente->preco }}</td>
                <td><input type="checkbox" {{ $ingrediente->eh_ativo ? 'checked' : '' }}></td>
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
