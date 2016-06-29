<!DOCTYPE html>
<html>
<head>
<title>Domotica interface</title>
<link rel=stylesheet type ='text/css' href='style.css'>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="functions.js"></script>
</head>
<body onload="startTime()">
<span id="Weer" style="display: none;"></span>
<div id="weatherdisplay" align="left" class="weatherback"><img id="weatherindicator" src="" width="2048" height="1536" border="0"></div>

<!--<div data-role="content" class="page-bg">-->
<header>
<h1><a href='index.php'><span class="date">
<?php
//Set locale to Dutch
setlocale(LC_ALL, 'nl_NL.utf8');
echo strftime("%A %e %B %Y ");
?>
</span>
Andy's DOMOTICA systeem
<span class="clock" id="clock"></span>
</a></h1>

</header>
