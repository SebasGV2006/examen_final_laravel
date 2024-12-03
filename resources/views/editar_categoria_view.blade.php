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
    <form action="{{route('add_category', ['id' => $category->id])}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}" disabled>
        <input type="text" name="nombre" value="{{$category->name}}" placeholder="{{$category->name}}">
        <input type="submit" value="editar Category">
    </form>
</body>
</html>