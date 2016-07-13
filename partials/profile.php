

<?php 

/*1st method*/	


include_once("api/obj/dbcon.php");
$conn = new dbCon();
	//Prepare the SQL statement to get
	//all records from database
	$sql = "SELECT * FROM user_hours_record WHERE userID=".$_SESSION[ 'userID' ]."";

	$num=0;

	$rec=$conn->showRecord( $sql );

	/*print_r($rec);*/

	$num = $rec->num_rows;


/*2nd method*/	
	/*$servername 		= 'localhost';
	$username 			= 'root';
	$password			= '';
	$dbname 			= 'rustam_app1';

	

	
	

	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 


	$sql = "SELECT * FROM user_hours_record WHERE userID=".$_SESSION[ 'userID' ]."";
	$rec= $conn->query( $sql );

	$num = $rec->num_rows;
*/

 ?>
<form action="welcome.php" method="post">
<div class="titles">
<div class="col-md-1"></div>
<div class="col-md-2">DAYS OF THE WEEK</div>
<div class="col-md-3">START</div>
<div class="col-md-3">FINISH</div>
<div class="col-md-2">TOTAL</div>
<div class="col-md-1"></div>

</div>
<div class="breaker"></div>





<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="row mondayRow">
<div class="col-md-1"></div>
<div class="col-md-2" id="weekDay">Monday:</div>


<div class="col-md-3 startMon">
	<input type="number" name="inputHoursMondayStart" class="inputBox startMondayHours" value="00" id="inputHoursMondayStart" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox startMondayMinutes" value="00" id="inputMinutesMondayStart" min="1" max="59">
	<select class="startMondaySelect" id="startMondaySelect">
		<option value="amS">AM</option>
		<option value="pmS">PM</option>
	</select>
</div>



<div class="col-md-3 finishMon">
	<input type="number" name="inputHoursMondayFinish" class="inputBox finishMondayHours" value="00" id="inputHoursMondayFinish" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox finishMondayFinish" value="00" id="inputMinutesMondayFinish" min="1" max="59">
	<select class="finishMondaySelect" id="finishMondaySelect">
		<option value="am">AM</option>
		<option value="pm">PM</option>
	</select>
</div>	

<div class="col-md-2">	
	<input type="number" id="totalMondayHours" name="totalMondayHours" value='0' size="50" disabled/>

	<input type="number" id="totalMondayMinutes" name="totalMondayMinutes" value='0' size="50" disabled/>
	<button type="button" class="btn btn-info" id="btnGetTheTimeMonday">Check</button>
</div>
<div class="col-md-1"></div>
</div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="breakerSmall"></div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="row tuesdayRow">
<div class="col-md-1"></div>
<div class="col-md-2" id="weekDay">Tuesday:</div>


<div class="col-md-3 startTu">
	<input type="number" name="inputHoursTuesdayStart" class="inputBox startTuesdayHours" value="00" id="inputHoursTuesdayStart" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox startTuesdayMinutes" value="00" id="inputMinutesTuesdayStart" min="1" max="59">
	<select class="startTuesdaySelect" id="startTuesdaySelect">
		<option value="amS">AM</option>
		<option value="pmS">PM</option>
	</select>
</div>



<div class="col-md-3 finishTu">
	<input type="number" name="inputHoursTuesdayFinish" class="inputBox finishMondayHours" value="00" id="inputHoursTuesdayFinish" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox finishTuesdayFinish" value="00" id="inputMinutesTuesdayFinish" min="1" max="59">
	<select class="finishTuesdaySelect" id="finishTuesdaySelect">
		<option value="am">AM</option>
		<option value="pm">PM</option>
	</select>
</div>	

<div class="col-md-2">	
	<input type="number" id="totalTuesdayHours" name="totalTuesdayHours" value='0' size="50" disabled/>

	<input type="number" id="totalTuesdayMinutes" name="totalTuesdayMinutes" value='0' size="50" disabled/>
	<button type="button" class="btn btn-info" id="btnGetTheTimeTuesday">Check</button>
</div>
<div class="col-md-1"></div>
</div>

<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="breakerSmall"></div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="row wednesdayRow">
<div class="col-md-1"></div>
<div class="col-md-2" id="weekDay">Wednesday:</div>


<div class="col-md-3 startWe">
	<input type="number" name="inputHoursWednesdayStart" class="inputBox startWednesdayHours" value="00" id="inputHoursWednesdayStart" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox startWednesdayMinutes" value="00" id="inputMinutesWednesdayStart" min="1" max="59">
	<select class="startWednesdaySelect" id="startWednesdaySelect">
		<option value="amS">AM</option>
		<option value="pmS">PM</option>
	</select>
</div>



<div class="col-md-3 finishWe">
	<input type="number" name="inputHoursWednesdayFinish" class="inputBox finishWednesdayHours" value="00" id="inputHoursWednesdayFinish" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox finishWednesdayFinish" value="00" id="inputMinutesWednesdayFinish" min="1" max="59">
	<select class="finishWednesdaySelect" id="finishWednesdaySelect">
		<option value="am">AM</option>
		<option value="pm">PM</option>
	</select>
</div>	

<div class="col-md-2">	
	<input type="number" id="totalWednesdayHours" name="totalWednesdayHours" value='0' size="50" disabled/>

	<input type="number" id="totalWednesdayMinutes" name="totalWednesdayMinutes" value='0' size="50" disabled/>
	<button type="button" class="btn btn-info" id="btnGetTheTimeWednesday">Check</button>
</div>
<div class="col-md-1"></div>
</div>

<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="breakerSmall"></div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

<div class="row thursdayRow">
<div class="col-md-1"></div>
<div class="col-md-2" id="weekDay">Thursday:</div>


<div class="col-md-3 startThu">
	<input type="number" name="inputHoursThursdayStart" class="inputBox startThursdayHours" value="00" id="inputHoursThursdayStart" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox startThursdayMinutes" value="00" id="inputMinutesThursdayStart" min="1" max="59">
	<select class="startThursdaySelect" id="startThursdaySelect">
		<option value="amS">AM</option>
		<option value="pmS">PM</option>
	</select>
</div>



<div class="col-md-3 finishThu">
	<input type="number" name="inputHoursThursdayFinish" class="inputBox finishThursdayHours" value="00" id="inputHoursThursdayFinish" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox finishThursdayFinish" value="00" id="inputMinutesThursdayFinish" min="1" max="59">
	<select class="finishThursdaySelect" id="finishThursdaySelect">
		<option value="am">AM</option>
		<option value="pm">PM</option>
	</select>
</div>	

<div class="col-md-2">	
	<input type="number" id="totalThursdayHours" name="totalThursdayHours" value='0' size="50" disabled/>

	<input type="number" id="totalThursdayMinutes" name="totalThursdayMinutes" value='0' size="50" disabled/>
	<button type="button" class="btn btn-info" id="btnGetTheTimeThursday">Check</button>
</div>
<div class="col-md-1"></div>
</div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="breakerSmall"></div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

<div class="row fridayRow">
<div class="col-md-1"></div>
<div class="col-md-2" id="weekDay">Friday:</div>


<div class="col-md-3 startFr">
	<input type="number" name="inputHoursFridayStart" class="inputBox startFridayHours" value="00" id="inputHoursFridayStart" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox startFridayMinutes" value="00" id="inputMinutesFridayStart" min="1" max="59">
	<select class="startFridaySelect" id="startFridaySelect">
		<option value="amS">AM</option>
		<option value="pmS">PM</option>
	</select>
</div>



<div class="col-md-3 finishFr">
	<input type="number" name="inputHoursFridayFinish" class="inputBox finishFridayHours" value="00" id="inputHoursFridayFinish" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox finishFridayFinish" value="00" id="inputMinutesFridayFinish" min="1" max="59">
	<select class="finishFridaySelect" id="finishFridaySelect">
		<option value="am">AM</option>
		<option value="pm">PM</option>
	</select>
</div>	

<div class="col-md-2">	
	<input type="number" id="totalFridayHours" name="totalFridayHours" value='0' size="50" disabled/>

	<input type="number" id="totalFridayMinutes" name="totalFridayMinutes" value='0' size="50" disabled/>
	<button type="button" class="btn btn-info" id="btnGetTheTimeFriday">Check</button>
</div>
<div class="col-md-1"></div>
</div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="breakerSmallW"></div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

<div class="row saturdayRow weekends">
<div class="col-md-1"></div>
<div class="col-md-2" id="weekDay">Saturday:</div>


<div class="col-md-3 startSa">
	<input type="number" name="inputHoursSaturdayStart" class="inputBox startSaturdayHours" value="00" id="inputHoursSaturdayStart" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox startSaturdayMinutes" value="00" id="inputMinutesSaturdayStart" min="1" max="59">
	<select class="startSaturdaySelect" id="startSaturdaySelect">
		<option value="amS">AM</option>
		<option value="pmS">PM</option>
	</select>
</div>



<div class="col-md-3 finishSa">
	<input type="number" name="inputHoursSaturdayFinish" class="inputBox finishSaturdayHours" value="00" id="inputHoursSaturdayFinish" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox finishSaturdayFinish" value="00" id="inputMinutesSaturdayFinish" min="1" max="59">
	<select class="finishSaturdaySelect" id="finishSaturdaySelect">
		<option value="am">AM</option>
		<option value="pm">PM</option>
	</select>
</div>	

<div class="col-md-2">	
	<input type="number" id="totalSaturdayHours" name="totalSaturdayHours" value='0' size="50" disabled/>

	<input type="number" id="totalSaturdayMinutes" name="totalSaturdayMinutes" value='0' size="50" disabled/>
	<button type="button" class="btn btn-info" id="btnGetTheTimeSaturday">Check</button>
</div>
<div class="col-md-1"></div>
</div>

<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="breakerSmallW"></div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

<div class="row sundayRow weekends">
<div class="col-md-1"></div>
<div class="col-md-2" id="weekDay">Sunday:</div>


<div class="col-md-3 startSu">
	<input type="number" name="inputHoursSundayStart" class="inputBox startSundayHours" value="00" id="inputHoursSundayStart" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox startSundayMinutes" value="00" id="inputMinutesSundayStart" min="1" max="59">
	<select class="startSundaySelect" id="startSundaySelect">
		<option value="amS">AM</option>
		<option value="pmS">PM</option>
	</select>
</div>



<div class="col-md-3 finishSu">
	<input type="number" name="inputHoursSundayFinish" class="inputBox finishSundayHours" value="00" id="inputHoursSundayFinish" min="1" max="12">
	:
	<input type="number" name="minutes" class="inputBox finishSundayFinish" value="00" id="inputMinutesSundayFinish" min="1" max="59">
	<select class="finishSundaySelect" id="finishSundaySelect">
		<option value="am">AM</option>
		<option value="pm">PM</option>
	</select>
</div>	

<div class="col-md-2">	
	<input type="number" id="totalSundayHours" name="totalSundayHours" value='0' size="50" disabled/>

	<input type="number" id="totalSundayMinutes" name="totalSundayMinutes" value='0' size="50" disabled/>
	<button type="button" class="btn btn-info" id="btnGetTheTimeSunday">Check</button>
</div>
<div class="col-md-1"></div>
</div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
<div class="breakerSmallW"></div>
<!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

<div class="titlesBot">
<div class="col-md-1"></div>
<div class="col-md-2"></div>
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-2">
	<input type="text" id="totalWeekHours" name="totalWeekHours" class="totalWeekHours"value='' size="50" disabled/>

	<input type="text" id="totalWeekMinutes" name="totalWeekMinutes" class="totalWeekMinutes" value='' size="50" disabled/>
	<button type="button" class="btn btn-info" id="btnGetTheTotalWeek">Check</button>
	</div>
<div class="col-md-1"></div>


<button type="button" class="btn btn-success" id="saveBtn">SAVE</button>
<input type="hidden" id="dataSource" name="dataSource" value="pullHourlyRecord"/>
<INPUT TYPE="button" onClick="history.go(0)" VALUE="Refresh" id="refresh">
</form>
<!-- <div id="showStatement"><h3>click here to see the statement</h3></div> -->
<div class="show">

 <?php
  echo "<h1>";
  echo "Hours Statement";
  echo "</h1>";



 	echo "<table id='hoursStatement' border='1'>";
 	echo  "<tr id='hsb'>";
 			echo  "<td>";
 			echo  "Monday";
 			echo  "</td>";

 			echo  "<td>";
 			echo  "Tuesday";
 			echo  "</td>";

 			echo  "<td>";
 			echo  "Wednesday";
 			echo  "</td>";

 			echo  "<td>";
 			echo  "Thursday";
 			echo  "</td>";

 			echo  "<td>";
 			echo  "Friday";
 			echo  "</td>";

 			echo  "<td>";
 			echo  "Saturday";
 			echo  "</td>";

 			echo  "<td>";
 			echo  "Sunday";
 			echo  "</td>";

 			echo  "<td>";
 			echo  "TOTAL";
 			echo  "</td>";

 			echo  "<td>";
 			echo  "DATE";
 			echo  "</td>";


 			

 			
 	echo  "</tr>";

 for($i = 0; $i < $num; $i++){

 	$row = mysqli_fetch_array($rec);


 	echo  "<tr>";

 	echo  "<td>";
 	echo $row['totalMonday'];
	echo  "</td>";	

	echo  "<td>";
 	echo $row['totalTuesday'];
	echo  "</td>";

	echo  "<td>";
 	echo $row['totalWednesday'];
 	echo  "</td>";

 	echo  "<td>";
 	echo $row['totalThursday'];
 	echo  "</td>";

 	echo  "<td>"; 	 	
 	echo $row['totalFriday'];
 	echo  "</td>";

 
 	echo  "<td>";
 	echo $row['totalSaturday'];
 	echo  "</td>";

 	echo  "<td>";
	echo $row['totalSunday'];	
	echo  "</td>";

	echo  "<td id='hsb'>";
	echo $row['totalWeek'];	
	echo  "</td>";

	echo  "<td>";
	echo $row['date'];	
	echo  "</td>";

	echo  "<td>";
 	echo  "<img src='img/can.png' width='23' class='deleteRec' name='actionType' id='".$row['id']."'>";
 	echo  "</td>";

	echo  "</tr>";

	

}

echo "<table>";

 	

  ?>

  <button type="button" id="printMe">PRINT</button>
</div>



<style>

#refresh{
	position: fixed;
margin-top: 6%;
margin-left: -3%;
}

.show{
	
	width: 80%;
	margin-top: 10%;
	text-align: center;
	margin-left: 10%;

/*visibility: hidden;*/

}

#hoursStatement tr td{

	width: 11.33%;
}

#hoursStatement tr:hover{

	background: rgba(193, 66, 66, 0.3);
}
#hsb{
	background: rgba(78, 217, 217, 0.3);
	border: solid 1px gray;

}

#showStatement{
	cursor: pointer;
}


</style>




