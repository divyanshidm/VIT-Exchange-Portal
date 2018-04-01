<?php 
session_start();
include('session.php');
echo "<hr/>
<html>
<head>
	<style type=\"text/css\">
body{
	color: white;
}
#map{
	color: black;
}

</style>
<body>
<center>
<form method=\"GET\" action=\"review_search.php\" >

Enter Place name (In Upper Case):  <input type=\"text\" name=\"search\">
<input type=\"submit\" name=\"submit\" value=\"search\">

</form>
</center>
<div align='right'><a href='reviewsexc.php'>Post A Review</a></div>
<hr/>";



if(!isset($_SESSION['regnum'])){
echo "ACCESS DENIED!";

}
else{

if(isset($_REQUEST['submit'])){

	$search=$_GET['search'];
	
	$query= "SELECT * FROM  review_exchange WHERE place='$search' ORDER BY rid desc";

	
	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password1 = $url["pass"];
  $db = substr($url["path"],1);

 $con= mysqli_connect($server, $username, $password1) or die("no connection established");

  mysqli_select_db($con,$db);
	$query=mysqli_query($con,$query);
	$num=mysqli_num_rows($query);
	$sum=0;
	$count=0;
	if($num > 0 && $search!=""){
		echo "$num Result(s) found for \"$search\"<br/>
		<table cellpadding='5px' border='1px'><b>
		<tr><td>Regnum </td><td> Name</td><td>Rating </td><td>Comment </td><td>Time</td></tr></b><p>";
		while($row=mysqli_fetch_array($query)){
			$regnum1=$row['regnum'];
			$name=$row['name'];
			$rating=$row['rating'];
			$comment=$row['comment'];
			$time= $row['tim'];
			$sum=$sum+$rating;
			

			echo "<tr><td>$regnum1 </td><td> $name</td><td>$rating</td><td>$comment </td><td>$time</td></tr>";


		}
		echo "</table><p>";
		$avg = $sum/$num;
		echo "Average Rating for ".$search." is ".round($avg,2);
	}
	else{
		echo "NO Results Found";

	}

	

	}


else
{echo "Search Value can't be empty";}
echo"<hr/><center><h3>";


echo "</h3></center>";



if(isset($_REQUEST['submit'])){

$add=urlencode($search);
$city = urlencode('Vellore');
$state = urlencode('Tamil Nadu');
$country = urlencode('India');
$zip = urlencode('632014');

$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add.',+'.$city.',+'.$state.',+'.$country.'&sensor=false');


$output= json_decode($geocode); //Store values in variable


if($output->status == 'OK'){ // Check if address is available or not
echo "<div class=\"display_map_details\">";
echo "<p>";
$lat = $output->results[0]->geometry->location->lat; //Returns Latitude

$long = $output->results[0]->geometry->location->lng; // Returns Longitude

echo "Address : ".$loc=$output->results[0]->formatted_address;
echo "</div><hr/>";

}

echo "
<div id='map'>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCrMKTQT5wFA0jj5n0umCh1_6ZQDPtJpro'></script><div style='overflow:hidden;height:496px;width:953px;'><div id='gmap_canvas' style='height:496px;width:953px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(".$lat.",".$long."),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(".$lat.",".$long.")});infowindow = new google.maps.InfoWindow({content:'<strong>".$search."</strong><br>".$loc."<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></div>";


}


}
echo "<br/><hr/><center><a href='review_forum_mine.php'>My Review Posts</a><br/>
<a href='enter.php'> Click here to go to your Dashboard </a></center><hr/>";
?>

</body>

</head>
</html>