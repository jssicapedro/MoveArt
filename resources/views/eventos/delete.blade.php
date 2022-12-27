<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar um Evento</title>
</head>
<body>
<form action="{{ route('excluir_evento', ['id' -> $evento->id]) }}" method="POST">
       @csrf
        <label for="">Tem a certeza que deseja eliminar este evento?</label><br>
        <input type="text" name="nome" value="{{ $evento->nome }}"><br>
        <button>Sim</button>
    </form>
</body>
</html>