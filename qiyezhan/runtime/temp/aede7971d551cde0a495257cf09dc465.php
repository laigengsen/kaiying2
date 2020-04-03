<?php /*a:1:{s:85:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\admin\view\webinfo\newsyouhua.html";i:1571444746;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<style>
		*{
			padding: 0;
			margin: 0;
		}
		.tb{
			margin: 0 auto;
			text-align: center;
			width: 800px;
		}
		.tbdiv{
			padding: auto 0;
			margin: 0 auto;
		}
		textarea{
			width: 640px;
			padding-top: 15px;
			font-size: 17px;
		}
		.btn1{
			width: 100px;
			height: 30px;
		}
	</style>
</head>
<body>
<div class="tbdiv">
	<form action="<?php echo url('webinfo/newsyouhuasave'); ?>" method="post">
		<table class="tb" border="1px" cellspacing="0"  cellpadding="0" id="content">
			<tr>
				<td width="20%">产品分类</td>
				<td>
					<select style="width: 50%;height: 30px" id="sel" name="id">
						<option>请选择新闻类别</option>
						<?php if(is_array($newsyouhua) || $newsyouhua instanceof \think\Collection || $newsyouhua instanceof \think\Paginator): $i = 0; $__LIST__ = $newsyouhua;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo htmlentities($vo['id']); ?>" id="att" ><?php echo htmlentities($vo['producttitle']); ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>

				</td>
			</tr>
			<tr>
				<td width="20%">新闻标题</td>
				<td><textarea rows="10" name="title" id="title">请在上方选择类别</textarea></td>
			</tr>
			<tr>
				<td width="20%">新闻关键字</td>
				<td><textarea rows="10" name="keycode" id="keycode">请在上方选择类别</textarea></td>
			</tr>
			<tr>
				<td width="20%">新闻描述</td>
				<td><textarea rows="10" name="describ" id="describ">请在上方选择类别</textarea></td>
			</tr>
			<tr>
				<td colspan="2" height="50px"><button type="submit" class="btn1">提交</button></td>
			</tr>
		</table>
	</form>

</div>
</body>
</html>
<script src="/static/admin/assets/js/jquery-1.8.0.js"></script>
<script>

	// function getcategoryid() {
	//     var cateid=document.getElementById("cateid");
	//     var title=document.getElementById("title");
    //     var keycode=document.getElementById("keycode");
    //     var describ=document.getElementById("describ");
	// 	console.log(cateid.value);
    // }
	$(function () {
		$('#sel').change(function () {
            // $('select option:selected').attr("name","id");
            // var test=$('select option:selected').attr("name") ;
            // console.log(test);
		    // console.log($('select option:selected').val());

			var cateid=$('#sel').val();
                // var cateid=document.getElementById("cateid");
                var title=document.getElementById("title");
                var keycode=document.getElementById("keycode");
                var describ=document.getElementById("describ");
                console.log(cateid);

                $.ajax({
					type:'post',
					url:"<?php echo url('admin/webinfo/newsyouhuajson'); ?>",
					data:'sel='+cateid,
					success:function (res) {
                        title.value=res.producttitle;
                        keycode.value=res.productkeycode;
                        describ.value=res.productdescrib;
                        console.log(title.value);

                    }
				})
        });
    });
</script>