<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

   @csrf

    <title>Teste</title>
</head>
<body>
<h1>Testando</h2>
    <form name="teste" action="{{route('admin.home') }}" method="post" enctype="multipart/form-data">
        <p><input type="text" name="title" placeholder="Enter Video Title" /></p>
        <p><textarea name="description" cols="30" rows="10" placeholder="Video description"></textarea></p>
        <p><input type="file" name="video" /></p>
        <button type="submit" class="btn btn-default">Submit</button>
        {{ csrf_field() }}
    </form>
<h2><a href="{{route('admin.logout')}}">Deslogar</a></h2>

</body>

<script src="{{url(mix('backend/assets/js/teste.js'))}}"></script>
</html>