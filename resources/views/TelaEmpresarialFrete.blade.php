@extends('TelaLayoutEmpresarial')
@section('title', 'Produtos')
@section('lista')
    <h2>Fretes</h2>
@endsection

@section('adicionar')
         
    <form action="{{ route('telaEmpresarialFreteCadastro') }}" method="POST"> @csrf <!-- Adicione o token CSRF para proteção --> <button class="btn" type="submit">Cadastrar</button> </form>
@endsection

@section('conteudo')
<div class="row container">
    <table class="table">
        <thead>
            <tr>
                <th> ID</th>
                <th> Data</th>
                <th> Nome</th>
                <th> Ativo</th>
                <th> Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fretes as $frete)
            <tr>
                <td> {{ $frete->id }}</td>
                <td> {{ $frete->created_at }}</td>
                <td> {{ $frete->nome_frete }}</td>
                <td> <input type="checkbox" {{ $frete->eh_ativo_frete ? 'checked' : '' }}></td>
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