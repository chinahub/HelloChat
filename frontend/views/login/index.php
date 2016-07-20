<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="U0t1X3VYbHIFKDMnPWweOAB.OTw8ABZCPH5GPhFqFAQ0fT8TFwoZOQ==">
    <title>登录</title>
    <link href="http://zhidian-test.chexiu.cn/assets/ddcfe04b/css/store/bootstrap.css" rel="stylesheet">
	<link href="http://zhidian-test.chexiu.cn/assets/ddcfe04b/css/store.css" rel="stylesheet">
<!--[if lte IE 8]>
<script src="/assets/30a70bd/ie8-polyfill.js"></script>
<![endif]-->
<!--[if lte IE 8]>
<script src="/assets/30a70bd/respond.js"></script>
<![endif]-->
<script src="/assets/ddcfe04b/js/app.js"></script>    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="wrap">
    <nav id="w0" class="navbar-inverse navbar-fixed-top navbar" role="navigation"><div class="container"><div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></button><a class="navbar-brand" href="/">知店CRM后台管理系统</a></div><div id="w0-collapse" class="collapse navbar-collapse"><ul id="w1" class="navbar-nav navbar-center nav"></ul><ul id="w2" class="navbar-nav navbar-right nav"><li class="active"><a href="/site/login">登录</a></li></ul></div></div></nav>    <div class="container" id="main_container">
        <div class="main-wrap">
            
            <div>
                                                <div class="content-wrap">
                    <style>
    .site-login {
        margin: 0 auto;
        max-width: 360px;
    }
</style>
<div class="site-login">
    <h1 class="text-center">登录</h1>

    <div>
        <form id="login-form" action="/site/login" method="post" role="form">
<input type="hidden" name="_csrf" value="U0t1X3VYbHIFKDMnPWweOAB.OTw8ABZCPH5GPhFqFAQ0fT8TFwoZOQ==">
        <div class="form-group field-loginform-phone required">
<label class="control-label" for="loginform-phone">账号</label>
<input type="text" id="loginform-phone" class="form-control" name="LoginForm[phone]">

<p class="help-block help-block-error"></p>
</div>
        <div class="form-group field-loginform-password required">
<label class="control-label" for="loginform-password">密码</label>
<input type="password" id="loginform-password" class="form-control" name="LoginForm[password]">

<p class="help-block help-block-error"></p>
</div>
        
        <div class="form-group field-loginform-rememberme">
<div class="checkbox">
<label for="loginform-rememberme">
<input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked>
自动登录
</label>
<p class="help-block help-block-error"></p>

</div>
</div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="login-button">登录</button>        </div>

        </form>    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(function() {
    $('#side-menu > li').each(function(){
        var $this = $(this);
        var ul    = $this.find('ul');
        if(ul.length===1){
            var li= ul.find('li');
            if(li.length===0){
                $this.hide();
            }
        }else{
            $this.hide();
        }
    });


    var changeBrowserTip = function(){
        if(navigator.appName == "Microsoft Internet Explorer" && /MSIE 6./i.test(navigator.appVersion)){ 
            $('#browserTip').show();
        } 
        else if(navigator.appName == "Microsoft Internet Explorer" && /MSIE 7./i.test(navigator.appVersion)){ 
            $('#browserTip').show();
        } 
        else if(navigator.appName == "Microsoft Internet Explorer" && /MSIE 8./i.test(navigator.appVersion)){ 
            $('#browserTip').show();
        } 
    }

    changeBrowserTip();

    $('.broswerClose a').click(function(){
        $(this).parents('#browserTip').hide();
    })
})
</script>
<footer class="footer">
    <div class="container">
        您正在使用知店SCRM系统
        <!--<a href="javascript:;">升级VIP</a>-- |-->
        <a href="http://www.zdscrm.chexiu.cn/about/index" target="_blank">关于知店</a> |
        <!--        <a href="" target="_blank">反馈建议</a>-->
        <a href="http://www.zdscrm.chexiu.cn/about/contact" target="_blank">联系我们</a> |
        Copyright ? 2012-2016 驱动新媒体. All Rights Reserved
    </div>
</footer>

</body>
</html>
