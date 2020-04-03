<?php /*a:2:{s:91:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\admin\view\menage\menageproductsave.html";i:1572098385;s:80:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\admin\view\public\header.html";i:1567693988;}*/ ?>
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
					<a href="#">系统设置</a>
				</li>
				<li class="active">角色权限</li>
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
					系统管理员
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						管理员列表
					</small>
				</h1>
			</div><!-- /.page-header -->
			<form name="formadd" action="<?php echo url('Menage/menageproductsave2'); ?>" method="post">
				<input type="hidden" value="<?php echo htmlentities($productsave['id']); ?>" name="id">
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="row">
							<div class="col-xs-12">
								<table id="simple-table" class="table  table-bordered table-hover">
									<thead>
									<tr>
										<td colspan="3">表格头部</td>
									</tr>
									</thead>


									<tbody>

									<tr>
										<td class="center" style="width: 200px">
											<div class="action-buttons">
												<a href="#">
													产品名称
												</a>
											</div>
										</td>
										<td style="text-align: center">产品描述</td>
										<td style="text-align: center">产品图片</td>
									</tr>


									<tr>
										<td class="center" style="width: 200px;">
											<input name="producttitle" type="text" value="<?php echo htmlentities($productsave['producttitle']); ?>">
										</td>
										<td style="text-align: center" width="200px">
											<textarea name="productdescrib" >
							    <?php echo htmlentities($productsave['productdescrib']); ?>
											</textarea>
										</td>
										<td>
											<div class="widget-body">
												<div class="widget-main">
													<div class="form-group">
														<div class="col-xs-12">
															选择图像文件：<input type="file" class="file" name="image" id="file"><br/>
															<input name="picture" type="hidden" value="" id="picture">
															<button onclick="return false;" id='sub'>点击上传</button>

															<div id="content">
																<img src="<?php echo htmlentities($productsave['productpicture']); ?>">
															</div>

														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td colspan="3" style="text-align: center"><button type="submit">保存</button></td>
									</tr>
									</tbody>
								</table>
							</div><!-- /.span -->
						</div><!-- /.row -->
						<div class="hr hr-18 dotted hr-double"></div>
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</form>
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
<script type="text/javascript" src="/static/common/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/common/ueditor/ueditor.all.js"></script>
<script>
    var ue=UE.getEditor('container',{
        autoHeightEnabled:false,
        initialFrameWidth:1000,
        initialFrameHeight:500,
    });
</script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
<script type="text/javascript">
    $('#sub').click(function () {
        // alert("测试");
        ajaxPost();
    })
    function ajaxPost(){
        var formData=new FormData();
        if($('#file')[0].files.length<=0){
            alert("请选择文件");
            return;
        }
        formData.append('image',$('#file')[0].files[0]);
        $.ajax({
            type:'post',
            url:"<?php echo url('Menage/picture'); ?>",
            data:formData,
            cache:false,
            processData:false,
            contentType:false,
            success:function(data){
                if(data){
                    var html='<img src="'+data.src+'" width="480" height="135">';
                    $('#content').html(html);
                    $('[name=picture]').val(data.src)
                }else{
                    alert("上传失败");
                }

            }
        })
    }
</script>