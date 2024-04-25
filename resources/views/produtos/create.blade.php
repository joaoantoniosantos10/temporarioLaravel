<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar um novo produto</title>
</head>
<body style="display: flex; align-items:center; justify-content:center; height:70vh;">
        <form style="display: flex; flex-direction: column; width: 20vw;" action="{{ route('registrar_produto') }}" method="POST">
            @csrf
            <label for="">Nome</label>
            <input type="text" name="nome">
            <label for="">Custo</label>
            <input type="text" name="custo">
            <label for="">Preço</label>
            <input type="text" name="preco">
            <label for="">Quantidade</label>
            <input type="text" name="quantidade">
            <button>Salvar</button>
        </form>
</body>
</html>