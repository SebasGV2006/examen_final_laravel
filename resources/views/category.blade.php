<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Css/estilo.css')}}">
    <title>Document</title>
</head>
<body>
    <a href="{{route('home')}}">
        <section>
            <h2>Crear tarea</h2>
        </section>
    </a>

    <form action="{{route('add_category')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name category">
        <input type="submit" value="Crear categoria">
    </form>
    @if (@session('status'))
    
        <h2> {{session('status')}}</h2>
    @endif
    <h2>list categorias</h2>
    <table>
        <thead>
            <th>id</th>
            <th>nombre</th>
        </thead>
        <tbody>
            @foreach ( $categories as $category )
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td><a href="{{route('editar_categoria_view', $category->id)}}"> Edit </a></td>
                    <td><a href="{{route('eliminar_categoria', $category->id)}}"> Delete </a></td>
                </tr>
            @endforeach
        </tbody>
    </table> 
</body>
</html>