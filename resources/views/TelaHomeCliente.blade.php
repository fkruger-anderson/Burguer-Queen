@extends('TelaLayoutCliente')
@section('title', 'Home')
@section('conteudo')

<div class="row container">

    @foreach ($produtos as $produto)
        
    <div class="col 12s m3">
        <div class="card">
          <div class="card-image">
            <img src="{{$produto->imagem}}">
            <span class="card-title">"{{$produto->nome_produto}}"</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
            <p>"{{$produto->preco_produto}}"</p>
          </div>
        </div>
      </div>

    @endforeach
    

</div>

@endsection