<!DOCTYPE html>
<?php
$select = "garage";
include('header.php');
include('nav.php');
echo "<article>";
?>
<script>
window.setInterval(function(){
	updatedevice(49,'garagelicht',"svicons/or/light_garage.png","svicons/ws/light_garage.png");
	updatedevice(112,'bergingventilator',"svicons/or/vent_ventilation_level_0.png","svicons/ws/vent_ventilation.png");
    }, 1000);

$(document).ready(function(){
    Klimaat(46) //berging
});


</script>
<div>
	<div class="box"><h3>klimaat</h3>
<p class="big">
<span id="Temp46"></span><br>
<span id="Hum46"></span>
</p>
	</div>
</div>


<div>
    <div class="box"><h3>bediening</h3>
<table width="100%"><tr><td width=25%">
<a href="#" onclick="Control(112, 'Toggle')"><img src="spinner.gif" width="32" height="32" hspace="5" vspace="5" border="0" id="bergingventilator"></a><br>ventilatie
</td>
<td width=25%">
<a href="#" onclick="Control(49, 'Toggle')"><img src="spinner.gif" width="32" height="32" hspace="5" vspace="5" border="0" id="garagelicht"></a><br>TL
</td>
<td width=25%">
<a href="#" onclick="Control(121, 'On')"><img src="svicons/ws/fts_garage.png" width="32" height="32" hspace="5" vspace="5" border="0" id="garagepoort"></a><br>poort
</td>
<td width=25%">
&nbsp;
</td>
</tr>
</table>
    </div>
</div>

<?php
echo "</article>";
include('footer.php');
?>
</div>

