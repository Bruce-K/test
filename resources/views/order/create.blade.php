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
<div>添加列表</div>
<form action="{{route('order.store')}}" method="post">
    {!! csrf_field() !!}
    <lable>测试名称</lable><input type="text" name="name">
    <input type="submit">
</form>
</body>
</html>