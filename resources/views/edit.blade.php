<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <li><a href="{{url('/')}}">HOME</a></li>
    <li><a href="{{url('/tipo/persona')}}">Tipos Persona</a></li>
    <h1>:: EDITAR DATOS ::</h1>
    <form action="{{url('tipo/persona', $tipo->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="tipo" value="{{$tipo->tipo}}" >
        <button type="submit">Editar</button>
    </form> 
</body>
</html>