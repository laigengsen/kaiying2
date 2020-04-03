<?php /*a:1:{s:77:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\user\view\index\danmu.html";i:1573134852;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style type="text/css">
    html, body {
      margin: 0px;
      padding: 0px;
      width: 100%;
      height: 100%;
      font-family: "微软雅黑";
      font-size: 62.5%;
    }
    
    .boxDom {
      width: 100%;
      height: 100%;
      position: relative;
      overflow: hidden;
    }
    
    .idDom {
      width: 100%;
      height: 100px;
      background: #666;
      position: fixed;
      bottom: 0px;
    }
    
    .content {
      display: inline-block;
      width: 520px;
      height: 40px;
      position: absolute;
      left: 0px;
      right: 0px;
      top: 0px;
      bottom: 0px;
      margin: auto;
    }
    
    .title {
      display: inline;
      font-size: 4em;
      vertical-align: bottom;
      color: #fff;
    }
    
    .text {
      border: none;
      width: 300px;
      height: 30px;
      border-radius: 5px;
      font-size: 2.4em;
    }
    
    .btn {
      width: 60px;
      height: 30px;
      background: #f90000;
      border: none;
      color: #fff;
      font-size: 2.4em;
    }
    .btn2 {
      width: 90px;
      height: 30px;
      background: #f90000;
      border: none;
      color: #fff;
      font-size: 2.4em;
    }
    
    /*span {*/
      /*width: 300px;*/
      /*height: 40px;*/
      /*position: absolute;*/
      /*overflow: hidden;*/
      /*white-space: nowrap;*/
    /*}*/

    .danmuSpan {
      width: 500px;
      height: 40px;
      position: absolute;
      overflow: hidden;
      white-space: nowrap;
      user-select:none;
    }

    .btndanmuSpan{
      width: 500px;
      height: 40px;
      position: absolute;
      overflow: hidden;
      white-space: nowrap;
      user-select:none;
    }

    .danmuSwitch{
      display:none;
    }
  
  </style>
</head>

<body>

<div class="boxDom" id="boxDom">

</div>

<div class="idDom" id="idDom">
  <div class="content">
    <p class="title">吐槽:</p>
    <input type="text" class="text" id="text"/>
    <button type="button" class="btn" id="btn">发射</button>
    <button type="button" class="btn2" id="btn2">弹幕开关</button>
  </div>
</div>

<ul style="width: 300px;height: 1500px;display: none;" class="danmuContent" id="danmuContent">
  <?php if(is_array($danmu) || $danmu instanceof \think\Collection || $danmu instanceof \think\Paginator): $i = 0; $__LIST__ = $danmu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_danmu): $mod = ($i % 2 );++$i;?>
  <li><?php echo htmlentities($vo_danmu['content']); ?></li>
  <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</body>

<script src="/static/user/websiteDemo/js/jquery-1.12.4.js"></script>
<script>
  
  $(function () {
    $("#btn").click(function () {
        //注册事件
        var btncolors = ["red", "green", "hotpink", "pink", "cyan", "yellowgreen", "purple", "deepskyblue"];
        var btnfontsize = ["30px", "28px", "29px"];
        var btnrandomColor = parseInt(Math.random() * btncolors.length);
        var btnrandomFontsize = parseInt(Math.random() * btnfontsize.length);
        var btnrandomY = parseInt(Math.random() * 400);
        $("<span class='btndanmuSpan' id='btndanmuSpan'></span>")//创建span
            .delay(1000)//延时效果 造成实时弹幕的假象以节约服务器资源
            .text($('#text').val())//设置内容
            .css("color", btncolors[btnrandomColor])//设置字体颜色
            .css("fontSize", btnfontsize[btnrandomFontsize])//设置字体大小
            .css("left", "2000px")//设置left值
            .css("top", btnrandomY)//设置top值
            .animate({left: -500}, 10000, "linear", function () {
                //到了终点，需要删除
                $(this).remove();
            })//添加动画
            .appendTo("#boxDom");

        // count=count+1;


//ajax插入数据库
        //文本框的值
        var danmucontent=$('#text').val();
        console.log(danmucontent);
        var postData={
            'danmucontent':danmucontent,
        };
        var url="<?php echo url('Index/danmusave'); ?>";
        $.post(url,postData);


        $("#text").val("");
        refresh();
    });
  });








      var count=0;
  function test(){
      //注册事件
      var colors = ["red", "green", "hotpink", "pink", "cyan", "yellowgreen", "purple", "deepskyblue"];
      var fontsize = ["30px", "23px", "24px", "25px", "26px", "27px", "28px", "29px"];
      // var delaytime=0;
      var randomFontsize = parseInt(Math.random() * fontsize.length);
      var randomColor = parseInt(Math.random() * colors.length);
      var randomY = parseInt(Math.random() * 600);
      $("<span class='danmuSpan'></span>")//创建span
          .text($('ul')[0].children[count].innerText)//设置内容
          .css("color", colors[randomColor])//设置字体颜色
          .css("fontSize", fontsize[randomFontsize])//设置字体大小
          .css("left", "1700px")//设置left值
          .css("top", randomY)//设置top值
          .animate({left: -500}, 10000, "linear", function () {
              //到了终点，需要删除
              $(this).remove();
          })//添加动画
          .appendTo("#boxDom");
      count=count+1;
      // console.log($('ul')[0].children.length);
      if (count==$('ul')[0].children.length){
          count=0;
      }
  }
  //每0.7s发射一个弹幕
  setInterval('test()',700);








  // console.log(document.getElementById('danmuContent'));
  // console.log(document.getElementById('danmuContent').children);
  //每10分钟刷新一次弹幕的队列
  function refresh() {
      document.getElementById('danmuContent').innerHTML='';
      $.ajax({
          type:'post',
          url:"<?php echo url('Index/danmujson'); ?>",
          success:function (res) {
              for (i=0;i<res.length;i++){
                  var danmuconten=document.getElementById('danmuContent');
                  danmuconten.innerHTML+='<li>'+ res[i].content+"</li>";
              }
          }
      })
  }
  //每10s刷新一次弹幕队列
  setInterval('refresh()',600000);














  //绑定回车键
  $("#text").keyup(function (e) {
      if (e.keyCode == 13) {
          $("#btn").click();
          refresh();
      }
  });












  //弹幕开关
  $('#btn2').click(function () {
      if ($('.boxDom').prop("className")=="boxDom danmuSwitch"){
          // console.log('捕捉类名boxDom danmuSwitch');
          $('.boxDom').removeClass("danmuSwitch")
      }else {
          // console.log($('.boxDom').prop("className"));
          $('.boxDom').addClass("danmuSwitch");
      }
  })
</script>
</html>