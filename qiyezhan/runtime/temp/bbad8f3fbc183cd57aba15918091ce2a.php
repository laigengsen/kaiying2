<?php /*a:1:{s:78:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\user\view\index\danmu2.html";i:1573287971;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="/static/user/websiteDemo/css/stylesheets/style.css">
  <script src="/static/user/websiteDemo/js/jquery-1.7.2.min.js"></script>
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
      position: absolute;
      z-index: -1;
      top: 0;
      overflow: hidden;
    }
    
    .idDom {
      width: 100%;
      height: 100px;
      /*background: #666;*/
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
      height: 50px;
      position: absolute;
      overflow: hidden;
      white-space: nowrap;
      user-select:none;
    }

    .btndanmuSpan{
      width: 500px;
      height: 50px;
      position: absolute;
      overflow: hidden;
      white-space: nowrap;
      user-select:none;
    }

    .danmuSwitch{
      display:none;
    }
  
  </style>
  <style>
    body{
      background-image: url(/static/user/websiteDemo/css/images/bg.jpg);
      background-size: cover;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      -moz-user-select: none;
      -khtml-user-select: none;
      -webkit-user-select: none;
      -o-user-select: none;
      user-select: none;
    }
  </style>
</head>

<body>
<!--音乐播放器区域-->
<div class="musicModular">
  <div id="background"></div>
  <div id="player">
    <div class="cover"></div>
    <div class="ctrl">
      <div class="tag">
        <strong>Title</strong>
        <span class="artist">Artist</span>
        <span class="album">Album</span>
      </div>
      <div class="control">
        <div class="left">
          <div class="rewind icon"></div>
          <div class="playback icon"></div>
          <div class="fastforward icon"></div>
        </div>
        <div class="volume right">
          <div class="mute icon left"></div>
          <div class="slider left">
            <div class="pace"></div>
          </div>
        </div>
      </div>
      <div class="progress">
        <div class="slider">
          <div class="loaded"></div>
          <div class="pace"></div>
        </div>
        <div class="timer left">0:00</div>
        <div class="right">
          <div class="repeat icon"></div>
          <div class="shuffle icon"></div>
        </div>
      </div>
    </div>
  </div>
  <ul id="playlist"></ul>
</div>


<!--弹幕区域-->
<div class="boxDom" id="boxDom">

</div>

<!--底部吐槽区域-->
<div class="idDom" id="idDom">
  <div class="content">
    <p class="title">吐槽:</p>
    <input type="text" class="text" id="text"/>
    <button type="button" class="btn" id="btn">发射</button>
    <button type="button" class="btn2" id="btn2">弹幕开关</button>
  </div>
</div>


<!--隐藏的弹幕内容区域-->
<ul style="width: 300px;height: 1500px;display: none;" class="danmuContent" id="danmuContent">
  <?php if(is_array($danmu) || $danmu instanceof \think\Collection || $danmu instanceof \think\Paginator): $i = 0; $__LIST__ = $danmu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_danmu): $mod = ($i % 2 );++$i;?>
  <li><?php echo htmlentities($vo_danmu['content']); ?></li>
  <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</body>


<script src="/static/user/websiteDemo/js/jquery-ui-1.8.17.custom.min.js"></script>
<!--<script src="/static/user/websiteDemo/js/script.js"></script>-->

<script>
  
  $(function () {
    $("#btn").click(function () {
        //注册事件
        var btncolors = ["red", "green", "hotpink", "pink", "cyan", "yellowgreen", "purple", "deepskyblue"];
        var btnfontsize = ["35px", "38px", "36px"];
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
      var fontsize = ["30px", "31px", "32px", "33px", "34px", "35px", "36px", "38px"];
      // var delaytime=0;
      var randomFontsize = parseInt(Math.random() * fontsize.length);
      var randomColor = parseInt(Math.random() * colors.length);
      var randomY = parseInt(Math.random() * 600);
      $("<span class='danmuSpan'></span>")//创建span
          .text($('#danmuContent')[0].children[count].innerText)//设置内容
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
<script>
    (function($){
        // Settings
        var repeat = localStorage.repeat || 0,
            shuffle = localStorage.shuffle || 'false',
            continous = true,
            autoplay = true,

            playlist = [

            ];

        var playlist2=[];
        $.ajax({
            type:'post',
            url:"<?php echo url('Index/musicselect'); ?>",
            async:false,
            success:function (res) {
                // console.log(JSON.stringify(res));
                // console.log(res);
                for (var i=0;i<res.length;i++)
                {
                    playlist[i]=res[i];
                    // playlist2[i]=JSON.stringify(res[i]);
                    // console.log( playlist2[i]);
                }
                // console.log(playlist2);
            }
        });


        // 加载播放列表
        for (var i=0; i<playlist.length; i++){
            var item = playlist[i];

                $('#playlist').append('<li style="width: 470px;height: 25px;overflow: hidden">'+item.artist+' - '+item.title+'</li>');
        }

        var time = new Date(),
            currentTrack = shuffle === 'true' ? time.getTime() % playlist.length : 0,
            trigger = false,
            audio, timeout, isPlaying, playCounts;

        var play = function(){
            audio.play();
            $('.playback').addClass('playing');
            timeout = setInterval(updateProgress, 500);
            isPlaying = true;
        };

        var pause = function(){
            audio.pause();
            $('.playback').removeClass('playing');
            clearInterval(updateProgress);
            isPlaying = false;
        };

        // 更新进度
        var setProgress = function(value){
            var currentSec = parseInt(value%60) < 10 ? '0' + parseInt(value%60) : parseInt(value%60),
                ratio = value / audio.duration * 100;

            $('.timer').html(parseInt(value/60)+':'+currentSec);
            $('.progress .pace').css('width', ratio + '%');
            $('.progress .slider a').css('left', ratio + '%');
        };

        var updateProgress = function(){
            setProgress(audio.currentTime);
        };

        // 进度滑块
        $('.progress .slider').slider({step: 0.1, slide: function(event, ui){
                $(this).addClass('enable');
                setProgress(audio.duration * ui.value / 100);
                clearInterval(timeout);
            }, stop: function(event, ui){
                audio.currentTime = audio.duration * ui.value / 100;
                $(this).removeClass('enable');
                timeout = setInterval(updateProgress, 500);
            }});

        // 音量滑块
        var setVolume = function(value){
            audio.volume = localStorage.volume = value;
            $('.volume .pace').css('width', value * 100 + '%');
            $('.volume .slider a').css('left', value * 100 + '%');
        };

        var volume = localStorage.volume || 0.5;
        $('.volume .slider').slider({max: 1, min: 0, step: 0.01, value: volume, slide: function(event, ui){
                setVolume(ui.value);
                $(this).addClass('enable');
                $('.mute').removeClass('enable');
            }, stop: function(){
                $(this).removeClass('enable');
            }}).children('.pace').css('width', volume * 100 + '%');

        $('.mute').click(function(){
            if ($(this).hasClass('enable')){
                setVolume($(this).data('volume'));
                $(this).removeClass('enable');
            } else {
                $(this).data('volume', audio.volume).addClass('enable');
                setVolume(0);
            }
        });

        // 轨道开关
        var switchTrack = function(i){
            if (i < 0){
                track = currentTrack = playlist.length - 1;
            } else if (i >= playlist.length){
                track = currentTrack = 0;
            } else {
                track = i;
            }

            $('audio').remove();
            loadMusic(track);
            if (isPlaying == true) play();
        };

        // Shuffle
        var shufflePlay = function(){
            var time = new Date(),
                lastTrack = currentTrack;
            currentTrack = time.getTime() % playlist.length;
            if (lastTrack == currentTrack) ++currentTrack;
            switchTrack(currentTrack);
        };

        // Fire when track ended
        var ended = function(){
            pause();
            audio.currentTime = 0;
            playCounts++;
            if (continous == true) isPlaying = true;
            if (repeat == 1){
                play();
            } else {
                if (shuffle === 'true'){
                    shufflePlay();
                } else {
                    if (repeat == 2){
                        switchTrack(++currentTrack);
                    } else {
                        if (currentTrack < playlist.length) switchTrack(++currentTrack);
                    }
                }
            }
        };

        var beforeLoad = function(){
            var endVal = this.seekable && this.seekable.length ? this.seekable.end(0) : 0;
            $('.progress .loaded').css('width', (100 / (this.duration || 1) * endVal) +'%');
        };

        // Fire when track loaded completely
        var afterLoad = function(){
            if (autoplay == true) play();
        };

        // Load track
        var loadMusic = function(i){
            var item = playlist[i],
                newaudio = $('<audio>').html('<source src="'+item.mp3+'"><source src="'+item.ogg+'">').appendTo('#player');

            $('.cover').html('<img src="'+item.cover+'" alt="'+item.album+'">');
            $('.tag').html('<strong>'+item.title+'</strong><span class="artist">'+item.artist+'</span><span class="album">'+item.album+'</span>');
            $('#playlist li').removeClass('playing').eq(i).addClass('playing');
            audio = newaudio[0];
            audio.volume = $('.mute').hasClass('enable') ? 0 : volume;
            audio.addEventListener('progress', beforeLoad, false);
            audio.addEventListener('durationchange', beforeLoad, false);
            audio.addEventListener('canplay', afterLoad, false);
            audio.addEventListener('ended', ended, false);
        };

        loadMusic(currentTrack);
        $('.playback').on('click', function(){
            if ($(this).hasClass('playing')){
                pause();
            } else {
                play();
            }
        });
        $('.rewind').on('click', function(){
            if (shuffle === 'true'){
                shufflePlay();
            } else {
                switchTrack(--currentTrack);
            }
        });
        $('.fastforward').on('click', function(){
            if (shuffle === 'true'){
                shufflePlay();
            } else {
                switchTrack(++currentTrack);
            }
        });
        $('#playlist li').each(function(i){
            var _i = i;
            $(this).on('click', function(){
                switchTrack(_i);
            });
        });

        if (shuffle === 'true') $('.shuffle').addClass('enable');
        if (repeat == 1){
            $('.repeat').addClass('once');
        } else if (repeat == 2){
            $('.repeat').addClass('all');
        }

        $('.repeat').on('click', function(){
            if ($(this).hasClass('once')){
                repeat = localStorage.repeat = 2;
                $(this).removeClass('once').addClass('all');
            } else if ($(this).hasClass('all')){
                repeat = localStorage.repeat = 0;
                $(this).removeClass('all');
            } else {
                repeat = localStorage.repeat = 1;
                $(this).addClass('once');
            }
        });

        $('.shuffle').on('click', function(){
            if ($(this).hasClass('enable')){
                shuffle = localStorage.shuffle = 'false';
                $(this).removeClass('enable');
            } else {
                shuffle = localStorage.shuffle = 'true';
                $(this).addClass('enable');
            }
        });
    })(jQuery);


</script>
</html>