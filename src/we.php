<?php
mysql_connect("localhost","root","");
mysql_select_db("vep");
$q=$_GET["q"];
	$sql="SELECT place FROM review_exchange WHERE place= '".$q."'";
	$result = mysql_query($sql);
	echo "<table border='1'>
	<tr>
	<th>username</th>
	</tr>";
	while($row = mysql_fetch_array($result))
 	{
 	echo "<tr>";
 	while($row = mysql_fetch_array($result))
 	{
 	echo "<tr>";
 	echo "<td>" . $row["search"]. "</td>";
 	echo "</tr>";
 	}
 	echo "</table>";

?>