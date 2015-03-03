<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Vatsim Flight Map</title>
<meta name="description" content="Vatsim flights online on google map: aircrafts and ATC. Update time: every 5 min.">
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="icon" href="favicon.ico"/>
<style type="text/css">
html { 
	height: 100% 
}
body { 
	height: 100%; 
	margin: 0; 
	padding: 0
}
#map_canvas { 
	height: 100%;
	width:100% 
}
#menu{
position: absolute; top: 0px; right: 115px; z-index: 50; margin-top: 5px
}

</style>
</head>
<body>
<div id="menu">
<div style="margin-left: 60px;">
<input id="search" style="margin-bottom: 2px; width: 90px; " type="text" placeholder="Search callsign" onkeydown="if(event.keyCode == 13) $('#cssearch').click();">
<div style="float:right; margin-left: 5px">
<input id="cssearch" type="button" value="go"> 
</div>
</div>
</div>
<div id="map_canvas">
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyA9zHzTYMK-qrIeDaC-DBdWab3UsN1UBFE&amp;sensor=true"></script>
<script src="/js/libs/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/js/app.js?<?=md5_file('js/app.js');?>"></script>
<script type="text/javascript">
var sc_project=10266561; 
var sc_invisible=1; 
var sc_security="ccb0c03c"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
</body>
</html>