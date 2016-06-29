<?php

include('functions.php');
echo "<nav><ul>";


if($select == "inkom") {$inkom_link = "class='s'"; $inkom_icon = "or";} else {$inkom_link = "";	$inkom_icon = "ws";}
echo "<li><a $inkom_link href='inkom.php'><img class='navicon' src='svicons/$inkom_icon/scene_stairs.png' /><span class='navtxt'>inkom</span><span class='navinfo'>";
getVal("12", "Temp");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "woonkamer") {$woonkamer_link = "class='s'"; $woonkamer_icon = "or";} else {$woonkamer_link = "";	$woonkamer_icon = "ws";}
echo "<li><a $woonkamer_link href='woonkamer.php'><img class='navicon' src='svicons/$woonkamer_icon/scene_livingroom.png' /><span class='navtxt'>woonkamer</span><span class='navinfo'>";
getVal("13", "Temp");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "keuken") {$keuken_link = "class='s'"; $keuken_icon = "or";} else {$keuken_link = "";	$keuken_icon = "ws";}
echo "<li><a $keuken_link href='keuken.php'><img class='navicon' src='svicons/$keuken_icon/scene_cooking.png' /><span class='navtxt'>keuken & veranda</span><span class='navinfo'>";
getVal("14", "Temp");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "tuin") {$tuin_link = "class='s'"; $tuin_icon = "or";} else {$tuin_link = "";	$tuin_icon = "ws";}
echo "<li><a $tuin_link href='tuin.php'><img class='navicon' src='svicons/$tuin_icon/scene_garden.png' /><span class='navtxt'>tuin</span><span class='navinfo'>";
getVal("87", "Temp");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "garage") {$garage_link = "class='s'"; $garage_icon = "or";} else {$garage_link = "";	$garage_icon = "ws";}
echo "<li><a $garage_link href='garage.php'><img class='navicon' src='svicons/$garage_icon/fts_garage.png' /><span class='navtxt'>garage & berging</span><span class='navinfo'>";
getVal("46", "Temp");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "bewaking") {$bewaking_link = "class='s'"; $bewaking_icon = "or";} else {$bewaking_link = "";	$bewaking_icon = "ws";}
echo "<li><a $bewaking_link href='bewaking.php'><img class='navicon' src='svicons/$bewaking_icon/it_camera.png' /><span class='navtxt'>bewaking</span><span class='navinfo'>";
echo "</span></a></li>";


if($select == "kalender") {$kalender_link = "class='s'"; $kalender_icon = "or";} else {$kalender_link = "";	$kalender_icon = "ws";}
echo "<li><a $kalender_link href='kalender.php'><img class='navicon' src='svicons/$kalender_icon/time_calendar.png' /><span class='navtxt'>kalender</span><span class='navinfo'>";
echo "</span></a></li>";


if($select == "lauren") {$lauren_link = "class='s'"; $lauren_icon = "or";} else {$lauren_link = ""; $lauren_icon = "ws";}
echo "<li><a $lauren_link href='lauren.php'><img class='navicon' src='svicons/$lauren_icon/scene_making_love_clean.png' /><span class='navtxt'>LAUREN</span><span class='navinfo'>";
echo "</span></a></li>";



echo "</ul></nav><nav><ul>";



if($select == "badkamer") {$badkamer_link = "class='s'"; $badkamer_icon = "or";} else {$badkamer_link = "";	$badkamer_icon = "ws";}
echo "<li><a $badkamer_link href='badkamer.php'><img class='navicon' src='svicons/$badkamer_icon/scene_bath.png' /><span class='navtxt'>badkamer</span><span class='navinfo'>";
getVal("19", "Temp");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "kinderkamer") {$kinderkamer_link = "class='s'"; $kinderkamer_icon = "or";} else {$kinderkamer_link = "";	$kinderkamer_icon = "ws";}
echo "<li><a $kinderkamer_link href='kinderkamer.php'><img class='navicon' src='svicons/$kinderkamer_icon/scene_childs_room.png' /><span class='navtxt'>kinderkamer</span><span class='navinfo'>";
getVal("47", "Temp");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "slaapkamer") {$slaapkamer_link = "class='s'"; $slaapkamer_icon = "or";} else {$slaapkamer_link = "";	$slaapkamer_icon = "ws";}
echo "<li><a $slaapkamer_link href='slaapkamer.php'><img class='navicon' src='svicons/$slaapkamer_icon/scene_making_love.png' /><span class='navtxt'>slaapkamer</span><span class='navinfo'>";
getVal("8", "Temp");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "babykamer") {$babykamer_link = "class='s'"; $babykamer_icon = "or";} else {$babykamer_link = "";	$babykamer_icon = "ws";}
echo "<li><a $babykamer_link href='babykamer.php'><img class='navicon' src='svicons/$babykamer_icon/scene_baby.png' /><span class='navtxt'>babykamer</span><span class='navinfo'>";
getVal("11", "Temp");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "energie") {$energie_link = "class='s'"; $energie_icon = "or";} else {$energie_link = "";	$energie_icon = "ws";}
echo "<li><a $energie_link href='energie.php'><img class='navicon' src='svicons/$energie_icon/measure_power_meter.png' /><span class='navtxt'>energie</span><span class='navinfo'>";
getVal("53", "Usage");
echo "</span></a></li>";


if($select == "klimaat") {$klimaat_link = "class='s'"; $klimaat_icon = "or";} else {$klimaat_link = "";	$klimaat_icon = "ws";}
echo "<li><a $klimaat_link href='klimaat.php'><img class='navicon' src='svicons/$klimaat_icon/sani_heating_temp.png' /><span class='navtxt'>klimaat</span><span class='navinfo'>";
getVal("51", "SetPoint");
echo "&nbsp;&deg;C</span></a></li>";


if($select == "verkeer") {$verkeer_link = "class='s'"; $verkeer_icon = "or";} else {$verkeer_link = "";	$verkeer_icon = "ws";}
echo "<li><a $verkeer_link href='verkeer.php'><img class='navicon' src='svicons/$verkeer_icon/message_attention.png' /><span class='navtxt'>verkeer</span><span class='navinfo'>";
echo "</span></a></li>";

if($select == "systeem") {$systeem_link = "class='s'"; $systeem_icon = "or";} else {$systeem_link = ""; $systeem_icon = "ws";}
echo "<li><a $systeem_link href='systeem.php'><img class='navicon' src='svicons/$systeem_icon/it_server.png' /><span class='navtxt'>systeem</span><span class='navinfo'>";
echo "</span></a></li>";


echo "</ul></nav>";


?>
