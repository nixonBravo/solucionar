<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('tipo/persona', $tipo->id)}}" method="post">
        @csrf
        @method('put')
        <input type="button" value="Actualizar" value="{{$tipo->tipo}}">
        <input type="text" name="tipo">
    </form>
</body>
</html>