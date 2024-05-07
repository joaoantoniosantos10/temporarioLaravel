@extends('layouts.main')

@section('title', 'Produto novo')

@section('content')
      <div class="form-create">
        <h1> Cadastro</h1>
        <form style="display: flex; flex-direction: column; width: 20vw;" action="{{ route('registrar_produto') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Arquivo de imagem </label>
            <input class="form-control" type="file" name="image" id="image" >
            <label for="">Nome</label>
            <input class="form-control" type="text" name="nome">
            <label for="">Custo</label>
            <input class="form-control" type="text" name="custo">
            <label for="">Preço</label>
            <input class="form-control" type="text" name="preco">
            <label for="">Quantidade</label>
            <input class="form-control" type="text" name="quantidade">
            <button class="form-control" >Salvar</button>
        </form>

      </div>
@endsection