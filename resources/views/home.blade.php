<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Css/estilo.css')}}">
    <title>Tareas</title>
</head>
<body>
    <article>
        
        <a href="{{route('category')}}">
            <section>
                <h2>Crear Categoria</h2>
             </section>
        </a>
    </article>

    <h1>Crear Tareass</h1>
    
        
    <form action="add_task" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title Task" required>
        <label for="completed">Completed:</label>
        <select name="completed" id="completed" required>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <select name="" id="">
            @foreach ( $categories as $category )
                <option value="{{$category->id}}"> {{$category->name}}</option>
            @endforeach
        </select>
        <textarea name="descripcion" cols="30" rows="10" value="description">

        </textarea>
        <input type="submit" value="Add task">
    </form> 

    <table>
        <thead>
            <th>ID</th>
            <th>title</th>
            <th>description</th>
            <th colspan="2">ACTIONS</th>
        </thead>
        <tbody>
            @if ($tasks)
                @foreach ( $tasks as $task )
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        {{-- <td><a href="{{route ('', $->id)}}">Edit</a></td>--}}
                        <td><a href="{{route ('eliminar_tarea', $task->id)}}">Delete</a></td> 
                    </tr>
                @endforeach
                @else
                <tr>
                    <th>Element not found</th>
                </tr>
                @endif 

        </tbody>
    </table>
    
</body>
</html>