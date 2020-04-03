<?php /*a:1:{s:79:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\user\view\index\kaiying.html";i:1571555934;}*/ ?>
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
    <link rel="stylesheet" href="/static/user/websiteDemo/css/kaiying.css" />
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
            凯盈有限公司
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

<!-- slideshow start here -->
<section id="slideshow-wrapper" style="width: 80%;margin-left: 10%;">
    <div class="camera_wrap" id="camera-slide">
        <!-- slide 1 here -->
        <div data-src="/static/user/websiteDemo/images/poster2.jpg">

        </div>
        <!-- slide 2 here -->
        <div data-src="/static/user/websiteDemo/images/poster3.jpg">

        </div>
        <!-- slide 3 here -->
        <div data-src="/static/user/websiteDemo/images/poster1.jpg">

        </div>
    </div>
</section>



<div class="product">

    <div><p style="font-size: 30px;padding-left: 200px">产品推荐</p></div>
    <div class="products">

        <div>
            <?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voproduct): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo url('Index/productdescrib',['id'=>$voproduct['id'],'cateid'=>$voproduct['parentid']]); ?>" style="text-decoration: none;float: left;margin-right: 10px">
                <img src="<?php echo htmlentities($voproduct['productpicture']); ?>" width="240" height="244">
                <p><?php echo htmlentities($voproduct['producttitle']); ?></p>
            </a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="productcate" style="padding-left: 50px;padding-top: 50px;color: black">
        <ul>
            <?php if(is_array($productcategory) || $productcategory instanceof \think\Collection || $productcategory instanceof \think\Paginator): $i = 0; $__LIST__ = $productcategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
            <li style="font-size: 25px;margin-bottom: 30px;border-bottom: 1px solid black"><a><?php echo htmlentities($vo1['name']); ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>


<div class="about">
    <center>
        <p style="font-size: 40px;padding-top: 30px;margin-bottom: 10px;background-color: #01409d;color: white">关于凯盈</p>
    </center>
    <div style="padding-top: 30px"><?php echo htmlentities($mainabout['content']); ?></div>


    <div class="about2">
        <div style="padding-top: 100px">
            <img src="/static/user/websiteDemo/images/homeabout3.jpg">
            <p>强聘12.9级高端系列为主</p>
        </div>
        <div style="padding-top: 100px">
            <img src="/static/user/websiteDemo/images/homeabout2.jpg">
            <p>强聘12.9级高端系列为主</p>
        </div>
        <div style="padding-top: 100px">
            <img src="/static/user/websiteDemo/images/homeabout2.jpg">
            <p>强聘12.9级高端系列为主</p>
        </div>
        <div style="padding-top: 100px">
            <img src="/static/user/websiteDemo/images/homeabout4.jpg">
            <p>强聘12.9级高端系列为主</p>
        </div>
    </div>
</div>




<div class="dongtai">
    <center>
        <p style="font-size: 40px;padding-top: 30px;margin-bottom: 10px;background-color: #01409d;color: white">新闻动态</p>
    </center>
    <div>
        <ul class="dongtainews">
            <?php if(is_array($newsyouhua) || $newsyouhua instanceof \think\Collection || $newsyouhua instanceof \think\Paginator): $i = 0; $__LIST__ = $newsyouhua;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?>
            <li style="border-bottom: 1px dashed black;padding-bottom: 5px"><a><?php echo htmlentities($news['producttitle']); ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div>
        <img src="/static/user/websiteDemo/images/homenews.jpg">
    </div>
    <div>
        <ul class="dongtainews">
            <?php if(is_array($newsyouhua2) || $newsyouhua2 instanceof \think\Collection || $newsyouhua2 instanceof \think\Paginator): $i = 0; $__LIST__ = $newsyouhua2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?>
            <li><a><?php echo htmlentities($news['producttitle']); ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>

<hr style="border: 4px solid grey">

<div class="footer">
    <center>
        <div class="footerdiv">
            <a href="<?php echo url('index/kaiying'); ?>" style="text-decoration: none">首页</a>
            <a href="<?php echo url('index/aboutkaiying'); ?>" style="text-decoration: none">关于凯盈</a>
            <a href="<?php echo url('index/product'); ?>" style="text-decoration: none">产品展示</a>
            <a href="<?php echo url('index/newskaiying'); ?>" style="text-decoration: none">新闻资讯</a>
            <a href="<?php echo url('index/contactkaiying'); ?>" style="text-decoration: none">联系我们</a>
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