<?php /*a:1:{s:77:"D:\phpstudy_pro\WWW\qiyezhan2\qiyezhan\application\user\view\index\music.html";i:1573133095;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery+html5网页播放器代码 - 站长素材</title>
<link rel="stylesheet" href="/static/user/websiteDemo/css/stylesheets/style.css">
<script src="/static/user/websiteDemo/js/jquery-1.7.2.min.js"></script>
</head>
<body>
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


<script src="/static/user/websiteDemo/js/jquery-ui-1.8.17.custom.min.js"></script>
<script src="/static/user/websiteDemo/js/script.js"></script>
</body>
</html>