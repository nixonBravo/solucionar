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

    <div style="margin-bottom: 25px">
        <form action="{{ url ('persona')}}" method="post">
            @csrf
            <input type="text" name="tipo" placeholder="Tipo">
            <input type="submit" value="Guardar">
        </form>
    </div>


    <table border="1">
        <thead>
            <tr> 
                <td> # </td>
                <td> Tipo </td>
                <td> Acciones </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipos as $item)
                <tr>
                    <td> {{ $loop->index + 1 }}</td>
                    <td> {{ $item->tipo }}</td>
                    <td>
                        
                        <form action="{{url('tipo/persona/editar',$item->id)}}" method="get">
                            @csrf
                            <button>Editar</button>
                        </form>
                  

                        <form action="{{url('tipo/persona',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button>Elimnar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>