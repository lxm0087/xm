<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>

</body>
<script src="{{URL::asset('js/layui/plugin/layui.js')}}"></script>
<script src="{{URL::asset('js/layui/js/global.js')}}"></script>
<script>
    layui.use(['common'], function () {
        var common = layui.common;
        common.ajax('http://route.showapi.com/32-9', 'post', 'json', {
            'showapi_appid': 28043,
            'showapi_sign': 'fd5ce066f69441bfa078c0ad16129b15',
            'q': 'hello'
        }, function (res) {
            alert(JSON.stringify(res));
        });
    });
</script>
</html>
