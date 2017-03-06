<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>更新商品</div>
<form action="{{route('good.update',['id'=>$good->id])}}" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="put">
    <lable>商品名称</lable><input type="text" name="name" value="{{$good->name}}">
    <lable>商品价格</lable><input type="text" name="price" value="{{$good->price}}">
    <input type="submit">
</form>
</body>
</html>