<?php
$urls=$_GET['url'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<title>CKX1</title>
<style type="text/css">body,html,.video{background-color:#000;padding: 0;margin: 0;width:100%;height:100%;}</style>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/s7webroot/000@main/ckplayer/ckplayer.min.js"></script>
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false" style="overflow-y:hidden;">
<div id="video"></div>

<script type="text/javascript" >
var jsurl = '<? echo $urls; ?>';
var isiPad = navigator.userAgent.match(/iPhone|Linux|Android|iPad|iPod|ios|iOS|Windows Phone|Phone|WebOS/i) != null; 	
	if (isiPad){
        document.getElementById('video').innerHTML = '<video src="'+ jsurl +'" controls="controls" autoplay="autoplay" width="100%" height="100%"></video>';
	}else{
	var videoObject = {
		container: '#video',
		variable: 'player',
		autoplay:true,
		video: '<? echo $urls; ?>'
	};
	}
var player = new ckplayer(videoObject);

</script>
</body>
</html>