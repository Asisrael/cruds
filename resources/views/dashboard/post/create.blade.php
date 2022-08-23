<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Primer Crud</title>
</head>
<body>
    <h1>Ingreso de Post</h1>
    <br>
    <br>

    <form action="{{route('post.store')}}" method="post">
    
        @csrf
        
        <label for="">Título</label>
        <input type="text" name="title">

        <label for="">Url Corta</label>
        <input type="text" name="slug">
        
        <label for="">Contenido</label>
        <textarea name="content" ></textarea>

        <label for="">Descripción</label>
        <textarea name="description" ></textarea>


         <button type="submit">Enviar</button>
    
    </form>
</body>
</html>