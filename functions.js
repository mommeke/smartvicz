function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

function Control(idx, cmd){
         $.ajax({ url: 'http://192.168.1.33:8084/json.htm?type=command&param=switchlight&idx='+idx+'&switchcmd='+cmd+'', });
};

function Scene(idx){
         $.ajax({ url: 'http://192.168.1.33:8084/json.htm?type=command&param=switchscene&idx='+idx+'&switchcmd=On', });
};

function Data(idx){
     $.getJSON("http://192.168.1.33:8084/json.htm?type=devices&rid="+idx, function(result){
	         document.getElementById("Data"+idx).innerHTML = '<span>' + result.result[0].Data + '</span>';
					     });
};

function Bat(idx){
     $.getJSON("http://192.168.1.33:8084/json.htm?type=devices&rid="+idx, function(result){
             document.getElementById("Bat"+idx).innerHTML = '<span><img src="svicons/ws/measure_battery_0.png" height="14px">' + result.result[0].BatteryLevel + '%</span>';
                         });
};

function UVI(){
     $.getJSON("http://192.168.1.33:8084/json.htm?type=devices&rid=89", function(result){
	              document.getElementById("UVI").innerHTML = '<span>UV index: <img src="svicons/ws/weather_sun.png" height="14px">' + result.result[0].UVI + '</span>';
				                           });
										   };

function Level(idx){
     $.getJSON("http://192.168.1.33:8084/json.htm?type=devices&rid="+idx, function(result){
             document.getElementById("Level"+idx).innerHTML = '<span>' + result.result[0].Level + '</span>';

//best fit icon
var level = result.result[0].Level;
if (level <= 10) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_100.png"></span>';
} 
if (level > 10 && level <= 20) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_90.png"></span>';
}     
if (level > 20 && level <= 30) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_80.png"></span>';
}    
if (level > 30 && level <= 40) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_70.png"></span>';
}    
if (level > 40 && level <= 50) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_60.png"></span>';
}    
if (level > 50 && level <= 60) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_50.png"></span>';
}    
if (level > 60 && level <= 70) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_40.png"></span>';
}    
if (level > 70 && level <= 80) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_30.png"></span>';
}    
if (level > 80 && level <= 90) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_20.png"></span>';
}    
if (level > 90) {
document.getElementById("nummer").innerHTML = '<span><img src="svicons/or/fts_shutter_10.png"></span>';
}    
                         });
};

function Status(idx){
     $.getJSON("http://192.168.1.33:8084/json.htm?type=devices&rid="+idx, function(result){
             document.getElementById("Status"+idx).innerHTML += '<span>' + result.result[0].Status + '</span>';
                         });
};


function Youless(idx){
     $.getJSON("http://192.168.1.33:8084/json.htm?type=devices&rid="+idx, function(result){
             document.getElementById("Usage"+idx).innerHTML += '<span>' + result.result[0].Usage + '</span>';
             document.getElementById("CounterToday"+idx).innerHTML += '<span>' + result.result[0].CounterToday + '</span>';
                         });
};

function LastUpdate(idx){
     $.getJSON("http://192.168.1.33:8084/json.htm?type=devices&rid="+idx, function(result){
             document.getElementById("Last"+idx).innerHTML += '<span>' + result.result[0].LastUpdate + '</span>';
                         });
};

function Weer(){
     $.getJSON("http://192.168.1.33:8084/json.htm?type=devices&rid=87", function(result){
//             document.getElementById("Weervoorsp").innerHTML += '<span>' + result.result[0].ForecastStr + '</span>';
             forecast = result.result[0].ForecastStr ;
			 console.log("Forecast is " + forecast + ".")

												 if (forecast == "Partly Cloudy") {
                                                 document.getElementById("weatherindicator").src = "weatherback-partlycloudy.jpg";
												document.getElementById("Weervoorsp").innerHTML += '<span>deels bewolkt</span>';
                                                                }

                                                 if (forecast == "Sunny") {
                                                 document.getElementById("weatherindicator").src = "weatherback-sunny.jpg";
												document.getElementById("Weervoorsp").innerHTML += '<span>zonnig</span>';
                                                                }                                                              

                                                if (forecast == "Rain") {
                                                 document.getElementById("weatherindicator").src = "weatherback-rain.jpg";
												document.getElementById("Weervoorsp").innerHTML += '<span>regen</span>';
                                                                }              

                                                if (forecast == "Fog") {
                                                 document.getElementById("weatherindicator").src = "weatherback-fog.jpg";
												document.getElementById("Weervoorsp").innerHTML += '<span>mist</span>';
                                                                }                              

                                                if (forecast == "Snow") {
                                                 document.getElementById("weatherindicator").src = "weatherback-snow.jpg";
												document.getElementById("Weervoorsp").innerHTML += '<span>sneeuw</span>';
                                                                }

                                                if (forecast == "Cloudy") {
                                                 document.getElementById("weatherindicator").src = "weatherback-cloudy.jpg";
												document.getElementById("Weervoorsp").innerHTML += '<span>bewolkt</span>';
                                                                } 

                         });
};


function Klimaat(idx){
     $.getJSON("http://192.168.1.33:8084/json.htm?type=devices&rid="+idx, function(result){
	    document.getElementById("Temp"+idx).innerHTML = '<span><img src="svicons/ws/temp_temperature.png" height="24px">' + result.result[0].Temp + '&deg;C</span>';
		document.getElementById("Hum"+idx).innerHTML = '<span><img src="svicons/ws/weather_humidity.png" height="24px">' + result.result[0].Humidity + '%</span>';
	});
};

$(document).ready(function(){
	Weer() //voor wallpaper
});
window.setInterval(function(){
	Weer() //voor wallpaper
}, 900000);

function updatedevice(idx,plaats,onimage,offimage){
                console.log("checking status of idx "+idx)
                var xmlhttp = new XMLHttpRequest();
                var url = "http://192.168.1.33:8084/json.htm?type=devices&rid="+idx;
                var onoff
                xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               var myArr = JSON.parse(xmlhttp.responseText);
                                                onoff = myArr.result[0].Status;
												var n = onoff.indexOf("Level");
       // myFunction(myArr);
                }
                                if (onoff == "On") {
                                document.getElementById(plaats).src = onimage;
                                }
                                if (onoff == "Off") {
                                document.getElementById(plaats).src = offimage;
                                }
                                if (onoff == "Open") {
                                document.getElementById(plaats).src = onimage;
                                }
                                if (onoff == "Closed") {
                                document.getElementById(plaats).src = offimage;
                                }
								//dimmer status geeft een level indien niet volledig uit/neer/aan/op
								if (n  >= 1){ 
                                document.getElementById(plaats).src = onimage;
								}
                }
xmlhttp.open("GET", url, true);
xmlhttp.send();
}

