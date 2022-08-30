<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/>app.css")}}">

    <script src="{{asset("js/>app.js")}}"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
   
    <title>Mi Primer Crud</title>
</head>
<body>
    <h1>Ingreso de Post</h1>
    <br>
    <br>





    <div class="container">
    <form action="{{route('post.store')}}" method="post">
      {{--   @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}} </div>
        @endforeach
    
    @endif --}}
        @csrf

        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>


        @endif
       
        <label for="">Título</label>
        <input type="text" name="title">
        @error('title')
            <small class="text-danger">{{$message}}</small>
        @enderror 
        <label for="">Url Corta</label>
        <input type="text" name="slug">
        
        @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror 



    
        <label for="">Contenido</label>
        <textarea name="content" ></textarea>
        @error('content')
        <small class="text-danger">{{$message}}</small>
    @enderror 
        <label for="">Descripción</label>
        <textarea name="description" ></textarea>


         <button type="submit">Enviar</button>
    
    </form>

</div>
   
</body>
</html>