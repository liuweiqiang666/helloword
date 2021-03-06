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
        window.X_Anti_Forge_Token = '483fba8a-13f6-4ac7-940a-136c6a24c4d2';
        window.X_Anti_Forge_Code = '66279669';
    </script>

    <!-- H5	 -->
    <!--[if lt IE 9]>
    <script src="style/js/html5shiv.min.js"></script>
    <script src="style/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="style/css/main.html_aio_0d4b51f.css" />
</head>
<body>

<!-- 页面主体START -->
<header class="sso_header">
    <a href="http://www.lagou.com" class="logo"><img src="style/images/img/logo.gif" alt="logo"></a>
</header>
<input type="hidden" value = "true" id = "isVisiable_request_form_verifyCode" />
<input type="hidden" value = "true" id = "is_must_show_verify_code" />
<section class="content_box cleafix">
    <div class="left_area fl">
        <form action="?r=index/registeradd" method="post" id="mobileWay>
            <ul class="form_head clearfix">
                <li class="active" data-lg-tj-id="18J0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <i class="icon icon_phone"></i>
                    手机号码注册
                </li>
                <li data-lg-tj-id="18K0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <i class="icon icon_mail"></i>
                    邮箱注册
                </li>
            </ul>
            <div class="form_body"  data-view="phoneRegister">
                <div class="input_item clearfix" data-propertyname="phone" data-controltype="Phone">
                    <input type="text" class="input input_white" id="" name="tel" placeholder="请输入常用手机号码" data-required="required" autocomplete="off" >
                </div>
                <div class="input_item clearfix" data-propertyname="request_form_verifyCode" data-controltype="VerifyCode" style="display:none;">
                    <input type="text" class="input input_white fl" style="width:130px; display:block;" name="" placeholder="请证明你不是机器人" data-required="required" autocomplete="off" >
                    <img src="" alt="" class="yzm">
                    <a rel="nofollow" href="javascript:;" class="reflash"></a>
                </div>
                <div class="input_item" data-propertyname="phoneVerificationCode" data-controltype="PhoneVerificationCode">
                    <div class="input_group clearfix">
                        <input type="text" class="input input_white first_child" id="" name="" placeholder="请输入短信验证码" data-required="required" autocomplete="off" >
                        <input type="button" class="btn btn_green btn_active btn_lg last_child" onclick="sendMessage()" value="获取验证码" data-required="required" data-lg-tj-id="1940" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    </div>
                </div>
                <div class="input_item clearfix" data-propertyname="password" data-controltype="Password">
                    <input type="password" class="input input_white" id="" name="password" placeholder="请输入密码" data-required="required" autocomplete="off" >
                </div>

                <div class="input_item clearfix" data-propertyname="type" data-controltype="Switch">
                    <input type="button"  class="btn btn_outline btn_lg" value="找工作" data-myvalue="0" data-lg-tj-id="1960" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <input type="button"  class="btn btn_outline btn_lg last_child" value="招人" data-myvalue="1" data-lg-tj-id="1970" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                </div>
                <div class="input_item clearfix" style="margin-top:16px;" data-propertyname="protocol" data-controltype="CheckBox">
                    <label for="checkbox">
                        <input type="checkbox" value="" id="checkbox" class="checkbox" data-myvalue="agred" data-text="我已阅读并同意" >
                        <a rel="nofollow" href='http://www.lagou.com/privacy.html' target='_blank' style='color:#00b38a' data-lg-tj-id="18L0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">《能招用户协议》</a>
                    </label>
                </div>
                <div class="input_item clearfix" data-propertyname="submit" data-controltype="Botton">
                    <input type="submit" class="btn btn_green btn_active btn_block btn_lg" value="注&nbsp;册" data-lg-tj-id="1950" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                </div>
            </div>
            <div class="form_body" data-view="emailRegister" style="display:none;">
                <div class="input_item clearfix"  data-propertyname="email" data-controltype="Email">
                    <input type="text" class="input input_white"  name="email" placeholder="请输入常用邮箱地址" data-required="required" autocomplete="off" >
                </div>
                <div class="input_item clearfix"  data-propertyname="password" data-controltype="Password">
                    <input type="password" class="input input_white" name="pwd" placeholder="请输入密码" data-required="required" autocomplete="off" >
                </div>
                <div class="input_item clearfix"  data-propertyname="request_form_verifyCode" data-controltype="VerifyCode">
                    <input type="text" class="input input_white fl" style="width:130px; display:block;" name="" placeholder="请证明你不是机器人" data-required="required" autocomplete="off" >
                    <img src="" alt="" class="yzm">
                    <a rel="nofollow" href="javascript:;" class="reflash"></a>
                </div>
                <div class="input_item clearfix" data-propertyname="type" data-controltype="Switch">
                    <input type="button" class="btn btn_outline btn_lg" value="找工作" data-myvalue="0" data-lg-tj-id="1960" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <input type="button" class="btn btn_outline btn_lg last_child" value="招人" data-myvalue="1" data-lg-tj-id="1970" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                </div>
                <div class="input_item clearfix" data-propertyname="protocol" data-controltype="CheckBox">
                    <label for="checkbox2">
                        <input type="checkbox" value="" id="checkbox2" class="checkbox" data-myvalue="agred" data-text="我已阅读并同意" >
                        <a rel="nofollow" href='http://www.lagou.com/privacy.html' target='_blank' style='color:#00b38a' data-lg-tj-id="18L0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">《能招用户协议》</a>
                    </label>
                </div>
                <div class="input_item clearfix"  data-propertyname="submit" data-controltype="Botton">
                    <input type="submit" class="btn btn_green btn_active btn_block btn_lg" value="注&nbsp;册" data-lg-tj-id="1950" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                </div>
            </div>
        </form>
    </div>
    <div class="divider fl">
        <img src="//img.lagou.com/passport/static/pc/modules/common/img/divider_a3c3658.jpg" alt="分割线">
    </div>
    </div>
    <div class="right_area fl">
        <h5>已有能招帐号:</h5>
        <a href="http://yii2/frontend/web/index.php?r=index/login" class="login_now" data-lg-tj-id="18N0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">直接登录</a>
        <h5>使用以下帐号直接登录:</h5>
        <ul class="vender_login clearfix">
            <li><a rel="nofollow" href="https://passport.lagou.com/oauth20/auth_sinaWeiboProvider.html" title="使用新浪微博帐号登录" class="vender_icon icon_sina" target="_blank" data-lg-tj-id="1910" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"><img src="style/images/weibo.png" alt="使用新浪微博帐号登录"></a></li>
            <li><a rel="nofollow" href="https://passport.lagou.com/oauth20/auth_qqProvider.html" title="使用腾讯QQ帐号登录" class="vender_icon icon_tencent" target="_blank" data-lg-tj-id="1920" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"><img src="style/images/qq.png" alt="使用QQ帐号帐号登录"></a></li>
            <li class="last_child"><a rel="nofollow" href="https://passport.lagou.com/oauth20/auth_weixinProvider.html" class="vender_icon icon_wechat" title="使用微信帐号登录" target="_blank" data-lg-tj-id="1930" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"><img src="style/images/wx1.png" alt="使用微信帐号帐号登录"></a></li>
        </ul>
        <div class="qrcode">
            <img src="style/images/img/12.jpg" alt="二维码">
            <p>[ 扫码下载能招APP ]</p>
        </div>
    </div>
</section>
<!-- 页面主体END -->
<footer>
    <h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer><!-- jquery lib -->
<!--能招UI框架 -->
<!-- analytics js file --><!-- plat analytics js file -->
<script type="text/javascript" src="style/js/vendor_c7a7c93.js"></script>
<script type="text/javascript" src="style/js/main.html_aio_e995440.js"></script>
<script type="text/javascript" src="style/js/static_ab40326.js"></script>
<script type="text/javascript">
    //login page
    require(['pc/page/register/main']);
</script>
<script type="text/javascript" src="style/js/oss.js"></script></body>
</html>
<script language="javascript">
    //短信和邮箱切换
    function changeTab()
    {
        $('#mailWay').toggle();
        $('#mobileWay').toggle();
    }
    //发送短信码
    function sendMessage()
    {
        var mobile   = $('#mobileWay [name="mobile"]').val();
        $.get("{url:/index/send_message_mobile}",{"mobile":mobile},function(content){
            if(content == 'success')
            {
                alert('发送成功，请查看您的手机');
            }
            else
            {
                alert(content);
                return;
            }
        });
    }
</script>
