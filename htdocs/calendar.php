<?php
// Include DB configs for testing file
include 'db.php';
//---------------------------------------

//Get today's date!
$today = date("Y-m-d"); 
echo "today is ".$today."<br>";
$today_hours = getHours ($today, 1); //1 for MMF
echo "today hours in MMF are: ".$today_hours."<br>";
echo "MMF hours this week are: <br>";
$week = getWeek ($today);

//print schedule for week
for ($i=0;$i<7;$i++){
	echo $week[$i].": ".getHours($week[$i], 1)."<br>"; //1 for MMF
}

function getWeek ($date){
// this function returns an array of dates that are in the current week. array[0] = monday

	//find start of week, which is the sunday.
	$today = strtotime($date); 
	$sunday = strtotime('last sunday', strtotime('+1 day', $today));
	$idate = $sunday;
	
	for ($i = 0; $i<7; $i++){
		$week_array[$i] = date("Y-m-d", $idate);
		$idate = strtotime('+1 day', $idate);
	}
	return $week_array;
}





function getHours ($date, $facility){ 
// this function returns hours for any given date and facility

	//check if today is a special day... holidays, etc
	$query = "select hours from special_hours where date = '".$date."' AND fac_id = ".$facility; //choosing MMF as example
	$result = mysql_query($query);
	if (mysql_num_rows($result) >0){
		$special_array = mysql_fetch_array($result);
		$today_hours = $special_array['hours']; //I got today's hours!
	} else { //it's not special, so grab regular hours

		//find out which season today is in
		$query = "select season from dates_season where start <= '".$date."' AND end >= '".$date."'";
		$result = mysql_query($query);
		$season_array = mysql_fetch_array($result);
		$season = $season_array['season'];

		//Choose the correct regular hours table
		$hours_table = $season."_hours";
	
		//find out today's day of the week
		//echo strtotime($date);
		$day_of_week = date("N", strtotime($date)); // for info: http://pl.php.net/manual/en/function.date.php
	
		//find out today's hours
		$query = "select hours from ".$hours_table." where day = '".$day_of_week."' AND fac_id = ".$facility; //choosing MMF as example
		$result = mysql_query($query);
		$my_array = mysql_fetch_array($result);
		$today_hours = $my_array['hours'];
	}
	return ($today_hours);
}
?>
