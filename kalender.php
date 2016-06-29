<!DOCTYPE html>
<style>
table.kal {
    border-collapse: collapse;
    width: 100%;
}

td.kal {
    padding: 5px;
    text-align: left;
	font-family: Dosis;
    border-bottom: 1px solid WhiteSmoke;
}
</style>

<?php
$select = "kalender";
include('header.php');
include('nav.php');

$json = file_get_contents('http://192.168.1.33/smartVISU/lib/calendar/service/googleV3.php?count=16');
$data = json_decode($json, true);

echo "<article>";
echo "<div class='widebox' style='height: 562px;'><h3>Kalender</h3>";
echo "<table class='kal'>";

foreach($data as $j){

echo "<tr><td class='kal'><a href='".$j['link']."'><span style='font-weight: bold; color: ".$j['color'].";'>";
echo $j['title']."</span><br><span style='font-family: Dosis, Digital; font-size: 0.6em; color: ".$j['color'].";'>"; 
echo $j['weekday'].", ".$j['period'];
echo "</span></a></td><td class='kal'><span style='font-weight: bold; color: ".$j['color'].";'>"; 
echo $j['where']; 
echo "</span></td></tr>";

}

echo "</table>";
echo "</div></article>";
include('footer.php');
?>

