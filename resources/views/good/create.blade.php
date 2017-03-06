<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<div>添加列表</div>
<form id="good" action="{{route('good.store')}}" method="post">
    {!! csrf_field() !!}
    <lable>商品名称</lable><input type="text" name="name">
    <lable>商品价格</lable><input type="text" name="price">
    <input type="submit">
</form>
<button id="add">提交</button>

<script>
    $("#add").click(function(){
        $.ajax({
            url: 'localhost/good',
            type: 'POST',
            dataType: 'json',
            data: {'_token': $('input[name=_token]').val(),'name':$('input[name=name]')}
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
       console.log($("#good").serialize());
    });
</script>
<script></script>
</body>
</html>