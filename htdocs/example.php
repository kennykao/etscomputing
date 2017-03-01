<?php
// Include DB configs for testing file
include 'db.php';
//---------------------------------------

//Get today's date!
$today = date("Y-m-d"); 
echo $today."<br>";

//check if today is a special day... holidays, etc
$query = "select hours from special_hours where date = '".$today."' AND fac_id = 1"; //choosing MMF as example
$result = mysql_query($query);
if (mysql_num_rows($result) >0){
	$special_array = mysql_fetch_array($result);
	$today_hours = $special_array['hours']; //I got today's hours!
} else { //it's not special, so grab regular hours

	//find out which season today is in
	$query = "select season from dates_season where start <= '".$today."' AND end >= '".$today."'";
	$result = mysql_query($query);
	$season_array = mysql_fetch_array($result);
	$season = $season_array['season'];
	echo $season."<br>";

	//Choose the correct regular hours table
	$hours_table = $season."_hours";
	echo "Table: ".$hours_table."<br>";
	
	//find out today's day of the week
	$day_of_week = date("N"); // for info: http://pl.php.net/manual/en/function.date.php
	
	//find out today's hours
	$query = "select hours from ".$hours_table." where day = '".$day_of_week."' AND fac_id = 1"; //choosing MMF as example
	$result = mysql_query($query);
	$my_array = mysql_fetch_array($result);
	$today_hours = $my_array['hours'];
}

echo "today hours in MMF are: ".$today_hours."<br>";

?>
