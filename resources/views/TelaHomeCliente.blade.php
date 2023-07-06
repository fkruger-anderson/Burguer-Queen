@extends('TelaLayoutCliente')
@section('title', 'Home')
@section('conteudo')

<div class="row container">

    @foreach ($produtos as $produto)
        
    <div class="col 12s m3" style="padding-top: 30px;">
        <div class="card">
          <div class="card-image">
            <img src="{{$produto->imagem}}" style="width: 213px; height: 150px;">
            
            <a href="{{ route('TelaHomeClienteController.Detalhes', $produto->slug)}}"class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
            <span class="card-title" style="font-size: 14px;">{{ $produto->nome_produto }}</span>
            <p>R$ {{ number_format($produto->preco_produto, 2, ',', '.') }}</p>
          </div>
        </div>
      </div>

    @endforeach
    

</div>

@endsection