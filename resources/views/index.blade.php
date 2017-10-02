<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>客户用药管理系统</title>
    <link rel="stylesheet" href="{{URL::asset('js/layui/plugin/css/layui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/index.css')}}">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="user-info">
            <img src="{{URL::asset('images/touxiang.jpg')}}">
            <div class="layui-introduce" >
                <p>
                    admin
                    <a class="tab-open" href="javascript:;" data-href=" " data-name="个人设置">
                        <i class="layui-icon"></i>
                        <span class="layui-hide">个人设置</span>
                    </a>
                </p>
                <p>超级管理员</p>
            </div>
            <div class="sign-out" data-type="signOut">
                <a href="javascript:;"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">添加信息</a></li>
            <li class="layui-nav-item"><a href="">添加药品</a></li>
            {{--<li class="layui-nav-item"><a href="">商品管理</a></li>--}}
            {{--<li class="layui-nav-item"><a href="">用户</a></li>--}}
            {{--<li class="layui-nav-item">--}}
                {{--<a href="javascript:;">其它系统</a>--}}
                {{--<dl class="layui-nav-child">--}}
                    {{--<dd><a href="">邮件管理</a></dd>--}}
                    {{--<dd><a href="">消息管理</a></dd>--}}
                    {{--<dd><a href="">授权管理</a></dd>--}}
                {{--</dl>--}}
            {{--</li>--}}
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="/">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">信息管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">信息列表</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">药品管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">药品列表</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">内容主体区域</div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->

    </div>
</div>
<script src="{{URL::asset('js/layui/plugin/layui.js')}}"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>