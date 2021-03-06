<?php
header('content-type:text/html;charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="23635710066417756375" />
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
    <meta charset="UTF-8">

    <meta content="能招,能招网,能招招聘,拉钩, 拉钩网 ,互联网招聘,能招互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 能招官网, 能招百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

    <meta content="能招网是3W旗下的互联网领域垂直招聘网站" name="description">

    <title>找工作-互联网招聘求职网-能招网</title>

    <link rel="Shortcut Icon" href="style/js/favicon_faed927.ico">
    <!-- header/global_domain FE_base.. -->

    <script type="text/javascript">
        (function() {
            var protocol = window.location.protocol;
            var host = window.location.host;
            var baseUrl = protocol + '//' + host;

            window.GLOBAL_DOMAIN = window.GLOBAL_DOMAIN || {
                ctx: protocol + '//www.lagou.com',
                rctx: protocol + '//hr.lagou.com',
                crctx: protocol + '//hr.lagou.com/company',
                pctx: protocol + '//passport.lagou.com',
                actx: protocol + '//account.lagou.com',
                paictx: protocol + '//pai.lagou.com',
                sctx: protocol + '//suggest.lagou.com',
                zctx: protocol + '//yanzhi.lagou.com',
                proctx: 'https://pro.lagou.com',
                lgsctx: protocol + '//img.lagou.com',
                FE_frontLogin: baseUrl + '//www.lagou.com/frontLogin.do',
                FE_frontLogout: baseUrl + '//www.lagou.com/frontLogout.do',
                FE_frontRegister: baseUrl + '//www.lagou.com/frontRegister.do'
            };
            window.GLOBAL_CDN_DOMAIN = 'img.lagou.com';
        })();
    </script>
    <!-- 页面样式 --><!-- 动态token，防御伪造请求，重复提交 -->
    <script type="text/javascript">
        window.X_Anti_Forge_Token = '91e09849-b670-4965-a3cf-87aa7cb48cc7';
        window.X_Anti_Forge_Code = '27852191';
    </script>
    <!-- H5	 -->
    <!--[if lt IE 9]>
    <script src="style/js/html5shiv.min.js"></script>
    <script src="style/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="style/css/main.html_aio_d4facea.css" />
</head>
<body>
<!-- 页面主体START -->
<header class="sso_header">
    <a href="http://www.lagou.com" class="logo"><img src="style/images/img/logo.gif" alt="logo"></a>
</header>
<section class="content_box cleafix">
    <div class="left_area fl">
        <form action="?r=index/loginlist" method="post">
            <div class="form_body"  data-view="loginView">
                <div class="input_i5tem clearfix" data-propertyname="username" data-controltype="Phone">
                    <input type="text" class="input input_white" id="" name="tel" placeholder="请输入已验证手机/邮箱" data-required="required" autocomplete="off" >
                </div>
                <div class="input_item clearfix" data-propertyname="password" data-controltype="Password">
                    <input type="password" class="input input_white" id="" name="password" placeholder="请输入密码" data-required="required" autocomplete="off" >
                </div>
                <div class="input_item clearfix"  data-propertyname="request_form_verifyCode" data-controltype="VerifyCode" style="display:none;">
                    <input type="text" class="input input_white fl" style="width:130px; display:block;" name="" placeholder="请证明你不是机器人" data-required="required" autocomplete="off" >
                    <img src="" alt="" class="yzm">
                    <a rel="nofollow" href="javascript:;" class="reflash"></a>
                </div>
                <div class="input_item clearfix">
                    <a rel="nofollow" href="http://yii2/frontend/web/index.php?r=index/" class="forgot_pwd">忘记密码？</a>
                </div>
                <div class="input_item clearfix" data-propertyname="submit" data-controltype="Botton">
                    <input type="submit" class="btn btn_green btn_active btn_block btn_lg" value="登&nbsp;录" data-lg-tj-id="1j90" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                </div>
                <div class="input_item clearfix">
                    <h5 class="reg_now">还没有能招帐号？<a rel="nofollow" href="?r=index/register" data-lg-tj-id="1ja0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">立即注册</a></h5>
                </div>
                <input type="hidden" value = "" id = "isVisiable_request_form_verifyCode" />
            </div>
        </form>
    </div>
    <div class="divider fl">
        <img src="style/images/img/divider-login_3362138.jpg" alt="分割线">
    </div>
    <div class="right_area fl">
        <h5>使用以下帐号直接登录:</h5>
        <ul class="vender_login clearfix">
            <li><a rel="nofollow" href="https://passport.lagou.com/oauth20/auth_sinaWeiboProvider.html" title="使用新浪微博帐号登录" class="vender_icon icon_sina" target="_blank" data-lg-tj-id="1jb0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"><img src="style/images/weibo.png" alt="使用新浪微博帐号登录"></a></li>
            <li><a rel="nofollow" href="https://passport.lagou.com/oauth20/auth_qqProvider.html" title="使用腾讯QQ帐号登录" class="vender_icon icon_tencent" target="_blank" data-lg-tj-id="1jc0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"><img src="style/images/qq.png" alt="使用QQ帐号帐号登录"></a></li>
            <li class="last_child"><a rel="nofollow" href="https://passport.lagou.com/oauth20/auth_weixinProvider.html" class="vender_icon icon_wechat" title="使用微信帐号登录" target="_blank" data-lg-tj-id="1jd0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"><img src="style/images/wx1.png" alt="使用微信帐号帐号登录"></a></li>
        </ul>
        <div class="qrcode">
            <img src="style/images/img/12.jpg" alt="二维码">
            <p>[ 扫码下载能招APP ]</p>
        </div>
    </div>
</section>

<footer>
    <h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer>
<!-- 页面主体END --><!-- jquery lib -->
<!--能招UI框架 -->
<!-- analytics js file --><!-- plat analytics js file --><input type="hidden" id="serverTime" value="1489133551038" />

<!--<script type="text/javascript" src="style/js/vendor_c7a7c93.js"></script>-->
<script type="text/javascript" src="style/js/main.html_aio_05b2501.js"></script>
<script type="text/javascript" src="style/js/static_ab40326.js"></script>
<script type="text/javascript">
    //login page
    require(['pc/page/login/main'])
    require(['pc/modules/event/happy-3rd-birthday/main']);
</script>
<script type="text/javascript" src="style/js/oss.js"></script></body>
</html>
