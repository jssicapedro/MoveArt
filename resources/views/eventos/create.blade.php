<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Evento</title>
</head>
<body>
<form action="{{ route('registar_evento') }}" method="POST">
       @csrf
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>
        <label for="">Data</label><br>
        <input type="date" name="data"><br>
        <label for="">localizacao</label><br>
        <input type="text" name="nome"><br>
        <label for="">foto</label><br>
        <input type="text" name="nome"><br>
        <label for="">Descrição</label><br>
        <input type="text" name="descricao"><br>
        <button>Guardar</button>
    </form>
</body>
</html>