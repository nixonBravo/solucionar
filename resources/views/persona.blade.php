<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    @foreach ($users as $u)
        <h4>Nombre: {{$u->name}}</h4>
        <h4>Correo: {{$u->email}}</h4>
        <hr>   
    @endforeach
</body>
</html>