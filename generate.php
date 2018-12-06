<?php

//Assignment
$server = $_POST['server'];
$stream_key = $_POST['streamkey'];
$poster = $_POST['image'];
$width = $_POST['width'];
$height = $_POST['height'];
if(isset($_POST['autoplay'])){
  $autoplay = 'true';
}
else {
  $autoplay = 'false';
}

echo "
<script type='text/javascript' src='https://cdn.jsdelivr.net/clappr/latest/clappr.min.js'></script>
 <center>
 <br>
 <h1>PHXCDN Test Player - ".$stream_key."</h1>
 <div id='player'></div>
 </center>
 <script>
   var player = new Clappr.Player({
source: 'http://".$server."/live/".$stream_key."/index.m3u8',
poster: '".$poster."',
 mute: false,
 height: ".$height.",
 width: ".$width.",
 autoPlay: ".$autoplay.",
parentId: '#player'});
 </script>
";

echo "
<br>
<h3>Embed Code</h3>
<textarea name='text' cols='100' rows='20'>
<script type='text/javascript' src='https://cdn.jsdelivr.net/clappr/latest/clappr.min.js'></script>
 <center>
 <div id='player'></div>
 </center>
 <script>
   var player = new Clappr.Player({
source: 'http://".$server."/live/".$stream_key."/index.m3u8',
poster: '".$poster."',
 mute: false,
 height: ".$height.",
 width: ".$width.",
 autoPlay: ".$autoplay.",
parentId: '#player'});
 </script>
</textarea>";
?>
