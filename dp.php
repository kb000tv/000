
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>dp000</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="referrer" content="no-referrer"/>
    <script src="https://cdn.jsdelivr.net/npm/flv.js/dist/flv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js/dist/hls.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dplayer/dist/DPlayer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
  	<script type="text/javascript">var vid = window.location.href.split("url=")[1];</script>
	<style>
	body {margin: 0;padding: 0;}
    #dplayer {width: 100vw;height: 100vh;}
    </style>
</head>
<body>


<div id="dplayer"></div>
<script>
const dp = new DPlayer({
    container: document.getElementById('dplayer'),
	autoplay: true,
  
    video: {
        url:vid,
		type: 'hls',
        pic: 'https://p.pstatp.com/origin/pgc-image/20c32b68be6a4d24a59a5ed18e84e67d',
    }
});
//dp是播放器对象
    dp.on('playing', function () {
        setTimeout(function(){ 
            //dplayer 是播放器Div的Id
            document.getElementById("dplayer").classList.add("dplayer-hide-controller");
         }, 3000);
    });
</script>


<div style="display: none">

</div>
</body>
</html>