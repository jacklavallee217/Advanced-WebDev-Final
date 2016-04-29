<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CONCERTS</title>
</head>
<!--
Jack Lavallee
3/29/16
Lab10
-->
<?php
require("includes/config.php");
require("includes/connect.php");

$db = mysqli_connect ('localhost', 'webdev', 'cis1152', 'labs'); 

if (!$db) {
	die('Connect Error: ' . mysqli_connect_errno());
}

$query = "SELECT * FROM concerts";

$result = mysqli_query($db, $query);

if(!$result) {
	die ("SELECT error:" . mysqli_error($db));
}

$numRows = mysqli_num_rows($result);


print "<table border='1'>";

		for ($i = 0; $i < $numRows; $i++) {
			$row = mysqli_fetch_assoc($result);
			if ($i == 0) {
				foreach ($row AS $key => $value){
					print "<th>$key</th>";
				}
			}
			print "<tr>";
			foreach ($row AS $key => $value){
				print "<td>$value</td>";
			}
			print "</tr>";
		}

print "</table><br /><br /><br />";


//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////


$col2 = "venue";
$data2 = "Flynn Center";
$query2 = "SELECT * FROM concerts WHERE $col2 = '$data2'";

$result2 = mysqli_query($db, $query2);

if(!$result2) {
	die ("SELECT error:" . mysqli_error($db));
}

$numRows2 = mysqli_num_rows($result2);


print "<table border='1'>";

		for ($i = 0; $i < $numRows2; $i++) {
			$row = mysqli_fetch_assoc($result2);
			if ($i == 0) {
				foreach ($row AS $key => $value){
					print "<th>$key</th>";
				}
			}
			print "<tr>";
			foreach ($row AS $key => $value){
				print "<td>$value</td>";
			}
			print "</tr>";
		}

print "</table><br /><br /><br />";


//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////


$col3 = "featured_band";
$data3 = "The Machine Performs Pink Floyd";
$query3 = "SELECT * FROM concerts WHERE $col3 LIKE '%Floyd'";

$result3 = mysqli_query($db, $query3);

if(!$result3) {
	die ("SELECT error:" . mysqli_error($db));
}

$numRows3 = mysqli_num_rows($result3);


print "<table border='1'>";

		for ($i = 0; $i < $numRows3; $i++) {
			$row = mysqli_fetch_assoc($result3);
			if ($i == 0) {
				foreach ($row AS $key => $value){
					print "<th>$key</th>";
				}
			}
			print "<tr>";
			foreach ($row AS $key => $value){
				print "<td>$value</td>";
			}
			print "</tr>";
		}

print "</table>";



?>