<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

<<<<<<< HEAD
   @csrf
=======
>>>>>>> 66567c2013c3aa5d51a2bad28c7f62c6f82b50a9

    <title>Teste</title>
</head>
<body>
<h1>Testando</h2>
<<<<<<< HEAD
    <form name="teste" action="{{route('admin.home') }}" method="post" enctype="multipart/form-data">
=======

    <form action="{{ url('video') }}" method="post" enctype="multipart/form-data">
>>>>>>> 66567c2013c3aa5d51a2bad28c7f62c6f82b50a9
        <p><input type="text" name="title" placeholder="Enter Video Title" /></p>
        <p><textarea name="description" cols="30" rows="10" placeholder="Video description"></textarea></p>
        <p><input type="file" name="video" /></p>
        <button type="submit" class="btn btn-default">Submit</button>
        {{ csrf_field() }}
    </form>
<<<<<<< HEAD
=======
    
>>>>>>> 66567c2013c3aa5d51a2bad28c7f62c6f82b50a9
<h2><a href="{{route('admin.logout')}}">Deslogar</a></h2>

</body>

<script src="{{url(mix('backend/assets/js/teste.js'))}}"></script>
</html>