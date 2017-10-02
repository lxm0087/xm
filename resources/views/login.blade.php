<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>后台管理登</title>
    <link href="{{URL::asset('css/login.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{URL::asset('js/jquery.js')}}" language="javascript" type="text/javascript"></script>
    <script type="text/javascript">
        $ = jQuery;
        function changeAuthCode() {
            var num = 	new Date().getTime();
            var rand = Math.round(Math.random() * 10000);
            num = num + rand;
            $('#ver_code').css('visibility','visible');
            if ($("#vdimgck")[0]) {
                $("#vdimgck")[0].src = "../include/vdimgck.php?tag=" + num;
            }
            return false;
        }
    </script>
</head>
<body>
<div class="top_div"></div>  <!-- 登陆窗口上方深色部分 -->
<div class="login_box">   <!-- 登陆窗口主体部分 -->
    <div class="img_owl">    <!-- 猫头鹰 -->
        <div class="owl_head"></div>
        <div class="initial_left_hand" id="left_hand"></div>
        <div class="initial_right_hand" id="right_hand"></div>
    </div>
    <form name="form1" method="post" action="/submit" class="login">
    {{ csrf_field() }}
        <!--<input type="hidden" name="gotopage" value="" />-->
        <!--	--><input type="hidden" name="dopost" value="login" />
        <!--<input name='adminstyle' type='hidden' value='newdedecms' />-->
        <p class="login_user">
            <span class="user_logo"></span>
            <input type="text" name="username"  class="ipt" placeholder="请输入用户名" />
        </p>
        <p class="login_pwd">
            <span class="pwd_logo"></span>
            <input type="password" name="password" class="ipt alltxt" id="password" placeholder="请输入密码" />
        </p>


        <button type="submit" name="sm1" class="login-btn" onclick="this.form.submit();">登录</button>
    </form>
    <div class="bottom_box">
        <p class="bottom_box_txt">
            <span style="float: left;">技术支持：<a href="http://www.nclaimei.com/" target="_blank" title="南昌莱美美容医院">南昌莱美美容医院</a>&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </p>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        //得到焦点
        $("#password").focus(function(){
            $("#left_hand").animate({
                left: "150",
                top: " -38"
            },{step: function(){
                if(parseInt($("#left_hand").css("left"))>140){
                    $("#left_hand").attr("class","left_hand");
                }
            }}, 2000);
            $("#right_hand").animate({
                right: "-64",
                top: "-38px"
            },{step: function(){
                if(parseInt($("#right_hand").css("right"))> -70){
                    $("#right_hand").attr("class","right_hand");
                }
            }}, 2000);
        });
        //失去焦点
        $("#password").blur(function(){
            $("#left_hand").attr("class","initial_left_hand");
            $("#left_hand").attr("style","left:100px;top:-12px;");
            $("#right_hand").attr("class","initial_right_hand");
            $("#right_hand").attr("style","right:-112px;top:-12px");
        });
    });
</script>
</body>
</html>