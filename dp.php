<?php
$urls=$_GET['url'];
?>
<html>
<head>
<title>000</title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-language" content="zh-CN" />
<meta http-equiv="X-UA-Compatible" content="chrome=1" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta name="referrer" content="never" />
<meta name="renderer" content="webkit" />
<meta name="msapplication-tap-highlight" content="no" />
<meta name="HandheldFriendly" content="true" />
<meta name="x5-page-mode" content="app" />
<meta name="Viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/dplayer/dist/DPlayer.min.css">
<script src="https://cdn.jsdelivr.net/npm/flv.js/dist/flv.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/m3u8-parser@4.2.0/dist/m3u8-parser.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@1.11.2/dist/jquery.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js/dist/hls.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/dplayer/dist/DPlayer.min.js" charset="utf-8"></script>
<script type="text/javascript">
window.onload = function(){
		var dp = new DPlayer({
			container:document.getElementById('dpplayer'),
                        autoplay: true,
                        screenshot: true,
                        preload: 'auto',
			video:{
				quality:[{
					type:'hls',					
					url: '<? echo $urls; ?>'
				}],
                pic: 'https://p.pstatp.com/origin/pgc-image/75dc580c97f94403a720135235f50f68',
				defaultQuality:0
			}
		});
		dp.play();
        //dp是播放器对象
        dp.on('playing', function () {
            setTimeout(function(){ 
                //dpplayer 是播放器Div的Id
                document.getElementById("dpplayer").classList.add("dplayer-hide-controller");
             }, 3000);
        });

};
</script>
</head>
<body>
<div id="dpplayer"></div>

</body>
</html>
