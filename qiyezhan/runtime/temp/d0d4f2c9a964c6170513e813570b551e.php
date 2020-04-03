<?php /*a:1:{s:86:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\user\view\index\productdescrib.html";i:1571556069;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>Hyperion</title>

<!-- ////////////////////////////////// -->
<!-- //      Stylesheets Files       // -->
<!-- ////////////////////////////////// -->
<link rel="stylesheet" href="/static/user/websiteDemo/css/base.css" id="camera-css" />
<link rel="stylesheet" href="/static/user/websiteDemo/css/framework.css" />
<link rel="stylesheet" href="/static/user/websiteDemo/css/style.css" />
    <link rel="stylesheet" href="/static/user/websiteDemo/css/productdescrib.css" />
<link rel="stylesheet" href="/static/user/websiteDemo/css/noscript.css" media="screen,all" id="noscript" />
  
<!-- ////////////////////////////////// -->
<!-- //     Google Webfont Files     // -->
<!-- ////////////////////////////////// -->


<!-- ////////////////////////////////// -->
<!-- //        Favicon Files         // -->
<!-- ////////////////////////////////// -->
<link rel="shortcut icon" href="/static/user/websiteDemo//static/user/websiteDemo/images/favicon.ico" />

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script src="/static/user/websiteDemo/js/jquery.min.js"></script>
<script src="/static/user/websiteDemo/js/jquery.easing-1.3.min.js"></script>
<script src="/static/user/websiteDemo/js/tooltip.js"></script>
<script src="/static/user/websiteDemo/js/dropdown.js"></script>
<script src="/static/user/websiteDemo/js/tinynav.min.js"></script>
<script src="/static/user/websiteDemo/js/camera.min.js"></script>
<script src="/static/user/websiteDemo/js/jquery.fancybox.js?v=2.0.6"></script>
<script src="/static/user/websiteDemo/js/jquery.fancybox-media.js?v=1.0.3"></script>
<script src="/static/user/websiteDemo/js/jquery.ui.totop.min.js"></script>
<script src="/static/user/websiteDemo/js/ddaccordion.js"></script>
<script src="/static/user/websiteDemo/js/jquery.twitter.js"></script>
<script src="/static/user/websiteDemo/js/jflickrfeed.min.js"></script>
<script src="/static/user/websiteDemo/js/faq-functions.js"></script>
<script src="/static/user/websiteDemo/js/theme-functions.js"></script>
<script>
$(document).ready(function() { 
    //Camera Jquery
    $('#camera-slide').camera({
        thumbnails: false,
        hover: false,
        pagination: false,
    });	  	
});
</script> 

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




</head>
<body>
<!-- header start here -->
<header style="background-color: #01409d">
    <div id="main-wrapper">

        <!-- top-social start here -->
        <div id="top-social">
            <a class="trigger" href="#"></a>
            <div class="social-panel">
                <ul>
                    <li><a href="#"><img src="images/socials/social10.gif" alt="" /></a></li>
                    <li><a href="#"><img src="images/socials/social32.gif" alt="" /></a></li>
                    <li><a href="#"><img src="images/socials/social9.gif" alt="" /></a></li>
                    <li><a href="#"><img src="images/socials/social15.gif" alt="" /></a></li>
                    <li><a href="#"><img src="images/socials/social25.gif" alt="" /></a></li>
                </ul>
            </div>
        </div>
        <!-- top-social end here -->

        <!-- logo start here -->
        <div id="logo">
            <a href="#"><img src="/static/user/websiteDemo/images/1.ico" alt="mainlogo" width="100"/>
                凯盈汽车零部件
            </a>
        </div>
        <!-- logo end here -->

        <!-- mainmenu start here -->
        <nav id="mainmenu">
            <ul id="menu">
                <li class="selected dropdown"><a href="<?php echo url('index/kaiying'); ?>">首页</a></li>
                <li><a href="<?php echo url('index/aboutkaiying'); ?>">关于我们</a></li>
                <li><a href="<?php echo url('index/product'); ?>">产品展示</a></li>
                <li class="dropdown"><a href="<?php echo url('index/newskaiying'); ?>">新闻资讯</a></li>
                <li><a href="<?php echo url('index/contactkaiying'); ?>">联系我们</a></li>
            </ul>
        </nav>
        <!-- mainmenu end here -->

    </div>
</header>
<!-- header end here -->



<div class="product">
    <div class="productcate" style="padding-left: 50px;padding-top: 50px;color: black">
        <ul>
            <li style="font-size: 35px;margin-bottom: 40px;border-bottom: 1px solid black;color: black"><a>该产品分类为</a></li>
            <li style="font-size: 25px;margin-bottom: 30px;border-bottom: 1px solid white"><a><?php echo htmlentities($productcategory['name']); ?></a></li>
        </ul>
    </div>
    <div class="products">
        <div><p style="font-size: 30px;color: black">产品详情</p></div>
        <div>
            <div>
                <p style="font-size: 30px">产品名称:</p>
                <p style="font-size: 30px"><?php echo htmlentities($product['producttitle']); ?></p>
                <img src="<?php echo htmlentities($product['productpicture']); ?>" width="550" height="550">
                <div style="font-size: 35px;color: black;padding-top: 100px;"><?php echo htmlentities($product['productdescrib']); ?></div>
            </div>
        </div>
    </div>
</div>








<hr style="border: 4px solid grey">

<div class="footer">
    <center>
        <div class="footerdiv">
            <a href="<?php echo url('index/kaiying'); ?>">首页</a>
            <a href="<?php echo url('index/aboutkaiying'); ?>">关于凯盈</a>
            <a href="<?php echo url('index/product'); ?>">产品展示</a>
            <a href="<?php echo url('index/newskaiying'); ?>">新闻资讯</a>
            <a href="<?php echo url('index/contactkaiying'); ?>">联系我们</a>
        </div>
    </center>
    <center>
        <div class="footerdiv2">
            <div><label>公司名称 : </label><label><?php echo htmlentities($youhua['companyname']); ?></label></div>
            <div><label>公司地址 : </label><label><?php echo htmlentities($youhua['address']); ?></label></div>
            <div><label>邮箱 : </label><label><?php echo htmlentities($youhua['email']); ?></label></div>
            <div><label>联系人 : </label><label><?php echo htmlentities($youhua['person']); ?></label></div>
            <div><label>联系方式 : </label><label><?php echo htmlentities($youhua['phone']); ?></label></div>
        </div>
    </center>

</div>
<!-- footer start here -->

<!-- footer end here -->
       	
<script>$('#noscript').remove();</script>

</body>
</html>