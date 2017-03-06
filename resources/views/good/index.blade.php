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
<div>商品列表</div>
<div><a href="{{route("good.create")}}">添加</a></div>
<ul>
    @foreach($goods as $good)
    <li>
        <span>{{$good->name}}</span>
        <span>{{$good->price}}</span>
        <span><a href="/good/{{$good->id}}">查看</a></span>
        <span><a href="/good/{{$good->id}}/edit">修改</a></span>
        <span>
            <form action="{{route('good.destroy',['id'=>$good->id])}}" method="post">
                <input type="hidden" name="_method" value="delete">
                {!! csrf_field() !!}
                <input type="submit" value="删除">
            </form>
        </span>
    </li>
        @endforeach
</ul>
</body>
</html>