<!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var x=new google.maps.LatLng(22.34754,91.81233);
var Dhaka=new google.maps.LatLng(23.81033,90.41252);
var Chittagong=new google.maps.LatLng(22.34754,91.81233);
var Cox=new google.maps.LatLng(21.43946,92.00773);


function initialize()
{
var mapProp = {
  center:x,
  zoom:7,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var myTrip=[Dhaka,Chittagong,Cox];
var flightPath=new google.maps.Polyline({
  path:myTrip,
  strokeColor:"Green",
  strokeOpacity:0.8,
  strokeWeight:5
  });

flightPath.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style=" width:100%;height:650px;"></div>
</body>
</html>
