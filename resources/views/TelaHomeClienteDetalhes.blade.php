@extends('TelaLayoutCliente')
@section('title', 'Detalhado')
@section('conteudo')


<div class="row container">
    <div class="col 12s m6">
        <img src ="{{$produto->imagem}}" class="responsive-img">
    </div>
    <div class="col 12s m6">
        <h1> {{$produto->nome_produto}}" </h1>
        <p> {{$produto->descricao_produto}}" </p>
        <button class="btn oragen btn-large">  </button>
    </div>
</div>
@endsection
