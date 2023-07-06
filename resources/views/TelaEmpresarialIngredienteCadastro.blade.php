@extends('TelaLayoutEmpresarial')
@section('title', 'Ingredientes')
@section('lista')
    <h2>Cadastro - Ingredientes</h2>
@endsection

<div class="row container">
    <h2>Cadastro de Ingredientes</h2>
    <form action="{{ route('ingredientes.store') }}" method="POST">
        @csrf
        <div class="input-field">
            <input type="text" name="nome" id="nome" required>
            <label for="nome">Nome</label>
        </div>
        <label>
            <input type="checkbox" name="eh_ativo" id="ativo" checked>
            <span>Ativo</span>
        </label>
        <div class="btn-group">
            <button class="btn-edit">Alterar</button>
            <button class="btn btn-delete" type="button">Excluir</button>
        </div>
    </form>
</div>

@endsection