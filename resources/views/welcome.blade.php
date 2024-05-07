@extends('layouts.main')

@section('title', 'welcome')

@section('content')
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="produtos/novo/create">Create</a>
                  </li>
                <form class="d-flex" role="search">
                  <form action="/" method="GET">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </form>
              </div>
            </div>
          </nav>
    </header>
    <main>
    <div class="box-products">
        @if($produto || $search)
        @foreach($produto as $item)
        <div class="box-product">
           <div id="box-name">
           <h1>{{ $item->nome }}</h1> 
           </div>
           <p>Custo : {{ $item->custo ?? '' }}</p>
           <h2>{{ $item->preco ?? ''}}</h2>
           <div id="box-quantity">
            <p>Quantidade: {{ $item->quantidade ?? ''}}</p>
           </div>
           <div id="show">
            <a href="produtos/ver{{  $item->id }}" name='id' class="btn btn-success"> Ver</a>
           </div>
        </div>
        @endforeach
            @else
            <h4>Produtos nao cadastrados</h4>
        @endif
    </div>


    </main>

    @endsection