<?php /*a:2:{s:78:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\admin\view\musics\edit.html";i:1573306156;s:80:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\admin\view\public\header.html";i:1567693988;}*/ ?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard - Ace Admin</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/static/admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/static/admin/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="/static/admin/assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="/static/admin/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="/static/admin/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="/static/admin/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="/static/admin/assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="/static/admin/assets/js/html5shiv.min.js"></script>
    <script src="/static/admin/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">主页</a>
				</li>

				<li>
					<a href="#">产品管理</a>
				</li>
				<li class="active">添加产品</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
		<span class="input-icon">
			<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
			<i class="ace-icon fa fa-search nav-search-icon"></i>
		</span>
				</form>
			</div><!-- /.nav-search -->
		</div>

		<div class="page-content">
			<div class="ace-settings-container" id="ace-settings-container">
				<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
					<i class="ace-icon fa fa-cog bigger-130"></i>
				</div>

				<div class="ace-settings-box clearfix" id="ace-settings-box">
					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="no-skin" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div><!-- /.pull-left -->

					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
							<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
							<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
							<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
						</div>
					</div><!-- /.pull-left -->
				</div><!-- /.ace-settings-box -->
			</div><!-- /.ace-settings-container -->

			<div class="page-header">
				<h1>
					产品管理
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						添加产品
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<form class="form-horizontal" role="form" action="" enctype="multipart/form-data" method="post">
						<input type="hidden" name="id" value="<?php echo htmlentities($musics['id']); ?>">
						<div class="form-group">
							<label
									class="col-sm-2 control-label no-padding-right">音乐名字</label>
							<div class="col-sm-6">
								<input class="form-control" placeholder="" name="title"
									   type="text" value="<?php echo htmlentities($musics['title']); ?>">
							</div>
						</div>

						<div class="form-group">
							<label
									class="col-sm-2 control-label no-padding-right">音乐作者</label>
							<div class="col-sm-6">
								<input class="form-control" placeholder="" name="author"
									   type="text" value="<?php echo htmlentities($musics['artist']); ?>">
							</div>
						</div>


						<div class="form-group">
							<label
									class="col-sm-2 control-label no-padding-right">专辑缩略图</label>
							<div class="col-sm-6">
								<input id="pic" value="<?php echo htmlentities($musics['cover']); ?>" placeholder="" name="pic" style="display:inline;" type="file">
								<?php if($musics['cover'] != ''): ?>
								<img src="<?php echo htmlentities($musics['cover']); ?>" height="30" >
								<?php else: ?>
								<span>暂无缩略图</span>
								<?php endif; ?>
							</div>
						</div>


						<div class="form-group">
							<label
									class="col-sm-2 control-label no-padding-right">专辑音乐</label>
							<div class="col-sm-6">
								<input  placeholder="" name="music" style="display:inline;" type="file">
								<?php if($musics['mp3'] != ''): ?>
								<audio controls src="<?php echo htmlentities($musics['mp3']); ?>" height="30" ></audio>
								<?php else: ?>
								<span>暂无音频</span>
								<?php endif; ?>
							</div>
						</div>


						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">保存信息</button>
							</div>
						</div>
					</form>

				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>

<script>
    //录音上传
    $(function () {
        $("#test").change(function () {
            var objUrl = getObjectURL(this.files[0]);
            $("#audio").attr("src", objUrl);
            $("#audio")[0].pause();
            $("#audio").show();
            $("#mp3_submit").show()
            getTime();

        });
    });
    <!--获取mp3文件的时间 兼容浏览器-->
    function getTime() {
        setTimeout(function () {
            var duration = $("#audio")[0].duration;
            if(isNaN(duration)){
                getTime();
            }
            else{
                console.info("该歌曲的总时间为："+$("#audio")[0].duration+"秒")
            }
        }, 10);
    }
    <!--把文件转换成可读URL-->
    function getObjectURL(file) {
        var url = null;
        if (window.createObjectURL != undefined) { // basic
            url = window.createObjectURL(file);
        } else if (window.URL != undefined) { // mozilla(firefox)
            url = window.URL.createObjectURL(file);
        } else if (window.webkitURL != undefined) { // webkit or chrome
            url = window.webkitURL.createObjectURL(file);
        }
        return url;

    }
</script>
