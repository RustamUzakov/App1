<!DOCTYPE html>
<html>
<head>
	<title>TO DO LIST</title>
	<link rel="stylesheet" href="../css/normalize.css"/>
	<link rel="stylesheet" href="../css/bootstrap.css"/>
	<link rel="stylesheet" href="../css/custom.css"/>

	
</head>
<body>
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
	<input type="number" id="totalMondayHours" value='0' size="50" disabled/>

	<input type="number" id="totalMondayMinutes" value='0' size="50" disabled/>
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
	<input type="number" id="totalTuesdayHours" value='0' size="50" disabled/>

	<input type="number" id="totalTuesdayMinutes" value='0' size="50" disabled/>
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
	<input type="number" id="totalWednesdayHours" value='0' size="50" disabled/>

	<input type="number" id="totalWednesdayMinutes" value='0' size="50" disabled/>
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
	<input type="number" id="totalThursdayHours" value='0' size="50" disabled/>

	<input type="number" id="totalThursdayMinutes" value='0' size="50" disabled/>
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
	<input type="number" id="totalFridayHours" value='0' size="50" disabled/>

	<input type="number" id="totalFridayMinutes" value='0' size="50" disabled/>
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
	<input type="number" id="totalSaturdayHours" value='0' size="50" disabled/>

	<input type="number" id="totalSaturdayMinutes" value='0' size="50" disabled/>
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
	<input type="number" id="totalSundayHours" value='0' size="50" disabled/>

	<input type="number" id="totalSundayMinutes" value='0' size="50" disabled/>
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
	<input type="text" id="totalWeekHours" class="totalWeekHours"value='' size="50" disabled/>

	<input type="text" id="totalWeekMinutes" class="totalWeekMinutes" value='' size="50" disabled/>
	<button type="button" class="btn btn-info" id="btnGetTheTotalWeek">Check</button>
	</div>
<div class="col-md-1"></div>








<script src="../js/jquery.2.2.4.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>