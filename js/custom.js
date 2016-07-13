$(document).ready(function(){
 	var totalM=0;
 	var totalT=0;
 	var totalW=0;
 	var totalTh=0;
 	var totalF=0;
 	var totalS=0;
 	var totalSun=0;
 	var totalWeek=0;









	$("#userReg_btn").click( function(){

		var username 	= $("#username").val();
		var pass1 		= $("#pass1").val();
		var pass2 		= $("#pass2").val();

		var validReg 	= validateUserReg( username, pass1, pass2 );

		if( validReg ){
			var dataSrc = "userRegistration";
			var data = { "username": username, "password": pass1 }

			sendData( dataSrc, data );
			alert("You are registered");

		}
	} );
	$("#saveBtn").click( function(){
     	alert("SAVED");

		
			var dataSrc = "pullHourlyRecord";
			var data = { "totalM": totalM,"totalT":totalT , "totalW":totalW,"totalTh":totalTh,"totalF":totalF,"totalS":totalS,"totalSun":totalSun,"totalWeek":totalWeek}
			
console.log(data);



			if (totalM!=null || totalT!=null || totalW!=null || totalTh!=null || totalF!=null || totalS!=null || totalSun!=null || totalM!=NaN || totalT!=NaN || totalW!=NaN || totalTh!=NaN || totalF!=NaN || totalS!=NaN || totalSun!=NaN || totalM!="" || totalT!="" || totalW!="" || totalTh!="" || totalF!="" || totalS!="" || totalSun!="") {
				sendData( dataSrc, data );
			}
			

		
	} );

	$(".deleteRec").click(function(){

		console.log( "delete is clicked" );
			 var dataSrc ="deleteRecord";
			 var data = { "id": $(this).attr('id')}
			 sendData(dataSrc,data);
			 console.log(data);

	})

	$("#logoutLink").click( function(){
		var dataSrc = "logout";
		var data 	= "";

		sendData( dataSrc, data );

	});

	$("#userLogin_btn").click( function(){
		console.log("logging in");
		var username 	= $("#login_username").val();
		var pass1 		= $("#login_pass1").val();

		//Add validation step
		
		var dataSrc = "userLogin";
		var data = { "username": username, "password": pass1 }

			sendData( dataSrc, data );
	} );

	$("#profile_btn").click( function(){
		console.log("TEST SUCCESS");

		var u_name 	= $("#u_name").val();

		//Preparing the data for back end
		var dataSrc = "userProfile";
		//This is a JSON
		var data 	= { "u_name" : u_name };

			sendData( dataSrc, data );

	});

	$("#showStatement").click(function(){
		$(".show").css("visibility","visible")
	})

function printData()
{
   var divToPrint=document.getElementById("hoursStatement");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
$('#printMe').on('click',function(){
	$("#hoursStatement").css("width","100%");	
	printData();

})



	function sendData( dataSrc, data ){
		console.log( "sendData() initialized...")
		
		$.post("api/", { "dataSource": dataSrc, "data": data }).done( function( data ){
			//This below executes when the server has responded
			//convert string to json

			console.log(data);
			 obj = JSON.parse(data);

			 console.log(obj);

			switch(obj.status.status){

			 	case "User logged in":
			 		 loginHandler();
			 		break;

			 	case "session terminated":
			 		logoutHandler();
			 		break;
			 	case "no user":
			 		alert("SORRY YOUR USERNAME IS NOT FOUND")
			 		break;

			 	


			}
			if( obj.status.status == "User logged in"){
				location.reload();
			}
		});
	}

	function loginHandler(){
		location.reload();
	}

	function logoutHandler(){
		location.reload();
	}

	function validateUserReg( username, pass1, pass2 ){
		console.log( "validateUserReg() initialized...")
		var result = false;

		if( username != "" && pass1 != "" && pass2 != "" ){
			if( pass1 == pass2 ){
				if( pass1.length > 5 ){

					result = true;

				}else{
					alert("Password must be at least 6 characters long")
				}
			}else{
				alert("Passwords do not match");
			}
		}else{
			alert("All fields are required!");
		}

		return result;
	}




	console.log("js is here!!");

/*AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*/

$("#btnGetTheTimeMonday").click(function(){

	var start_hr 	= parseInt( $("#inputHoursMondayStart").val() );
	var start_mm 	= parseInt( $("#inputMinutesMondayStart").val() );
	var start_ampm	= $("#startMondaySelect").val();

	var end_hr 		= parseInt( $("#inputHoursMondayFinish").val() );
	var end_mm 		= parseInt( $("#inputMinutesMondayFinish").val() );
	var end_ampm 	= $("#finishMondaySelect").val();



	if(start_ampm == "pmS"){
		start_hr += 12;
	}

	if( end_ampm == "pm"){
		end_hr += 12
	}



	console.log(start_hr);
	console.log(start_mm);
	console.log(start_ampm);
	console.log(end_hr);
	console.log(end_mm);
	console.log(end_ampm);

	var totalHrs = end_hr - start_hr;
	var totalMin = start_mm + end_mm;

	if( totalMin >= 60 ){

		totalHrs++;
		totalMin = totalMin - 60;
	}

	console.log( totalHrs )
	console.log( totalMin )

	totalM = totalHrs + ' : ' + totalMin;

	document.getElementById("totalMondayHours").value=totalHrs;
	document.getElementById("totalMondayMinutes").value=totalMin;


})

/*AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*/
$("#btnGetTheTimeTuesday").click(function(){

	var start_hr 	= parseInt( $("#inputHoursTuesdayStart").val() );
	var start_mm 	= parseInt( $("#inputMinutesTuesdayStart").val() );
	var start_ampm	= $("#startTuesdaySelect").val();

	var end_hr 		= parseInt( $("#inputHoursTuesdayFinish").val() );
	var end_mm 		= parseInt( $("#inputMinutesTuesdayFinish").val() );
	var end_ampm 	= $("#finishTuesdaySelect").val();



	if(start_ampm == "pmS"){
		start_hr += 12;
	}

	if( end_ampm == "pm"){
		end_hr += 12
	}



	console.log(start_hr);
	console.log(start_mm);
	console.log(start_ampm);
	console.log(end_hr);
	console.log(end_mm);
	console.log(end_ampm);

	var totalHrs = end_hr - start_hr;
	var totalMin = start_mm + end_mm;

	if( totalMin > 60 ){

		totalHrs++;
		totalMin = totalMin - 60;
	}

	console.log( totalHrs )
	console.log( totalMin )

	totalT = totalHrs + ' : ' + totalMin;

	document.getElementById("totalTuesdayHours").value=totalHrs;
	document.getElementById("totalTuesdayMinutes").value=totalMin;


})
/*AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*/
$("#btnGetTheTimeWednesday").click(function(){

	var start_hr 	= parseInt( $("#inputHoursWednesdayStart").val() );
	var start_mm 	= parseInt( $("#inputMinutesWednesdayStart").val() );
	var start_ampm	= $("#startWednesdaySelect").val();

	var end_hr 		= parseInt( $("#inputHoursWednesdayFinish").val() );
	var end_mm 		= parseInt( $("#inputMinutesWednesdayFinish").val() );
	var end_ampm 	= $("#finishWednesdaySelect").val();



	if(start_ampm == "pmS"){
		start_hr += 12;
	}

	if( end_ampm == "pm"){
		end_hr += 12
	}



	console.log(start_hr);
	console.log(start_mm);
	console.log(start_ampm);
	console.log(end_hr);
	console.log(end_mm);
	console.log(end_ampm);

	var totalHrs = end_hr - start_hr;
	var totalMin = start_mm + end_mm;

	if( totalMin > 60 ){

		totalHrs++;
		totalMin = totalMin - 60;
	}

	console.log( totalHrs )
	console.log( totalMin )

	totalW = totalHrs + ' : ' + totalMin;

	document.getElementById("totalWednesdayHours").value=totalHrs;
	document.getElementById("totalWednesdayMinutes").value=totalMin;


})

/*AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*/
$("#btnGetTheTimeThursday").click(function(){

	var start_hr 	= parseInt( $("#inputHoursThursdayStart").val() );
	var start_mm 	= parseInt( $("#inputMinutesThursdayStart").val() );
	var start_ampm	= $("#startThursdaySelect").val();

	var end_hr 		= parseInt( $("#inputHoursThursdayFinish").val() );
	var end_mm 		= parseInt( $("#inputMinutesThursdayFinish").val() );
	var end_ampm 	= $("#finishThursdaySelect").val();



	if(start_ampm == "pmS"){
		start_hr += 12;
	}

	if( end_ampm == "pm"){
		end_hr += 12
	}



	console.log(start_hr);
	console.log(start_mm);
	console.log(start_ampm);
	console.log(end_hr);
	console.log(end_mm);
	console.log(end_ampm);

	var totalHrs = end_hr - start_hr;
	var totalMin = start_mm + end_mm;

	if( totalMin > 60 ){

		totalHrs++;
		totalMin = totalMin - 60;
	}

	console.log( totalHrs )
	console.log( totalMin )

	totalTh = totalHrs + ' : ' + totalMin;

	document.getElementById("totalThursdayHours").value=totalHrs;
	document.getElementById("totalThursdayMinutes").value=totalMin;


})
/*AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*/
$("#btnGetTheTimeFriday").click(function(){

	var start_hr 	= parseInt( $("#inputHoursFridayStart").val() );
	var start_mm 	= parseInt( $("#inputMinutesFridayStart").val() );
	var start_ampm	= $("#startFridaySelect").val();

	var end_hr 		= parseInt( $("#inputHoursFridayFinish").val() );
	var end_mm 		= parseInt( $("#inputMinutesFridayFinish").val() );
	var end_ampm 	= $("#finishFridaySelect").val();



	if(start_ampm == "pmS"){
		start_hr += 12;
	}

	if( end_ampm == "pm"){
		end_hr += 12
	}



	console.log(start_hr);
	console.log(start_mm);
	console.log(start_ampm);
	console.log(end_hr);
	console.log(end_mm);
	console.log(end_ampm);

	var totalHrs = end_hr - start_hr;
	var totalMin = start_mm + end_mm;

	if( totalMin > 60 ){

		totalHrs++;
		totalMin = totalMin - 60;
	}

	console.log( totalHrs )
	console.log( totalMin )

	totalF = totalHrs + ' : ' + totalMin;

	document.getElementById("totalFridayHours").value=totalHrs;
	document.getElementById("totalFridayMinutes").value=totalMin;


})

/*AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*/
$("#btnGetTheTimeSaturday").click(function(){

	var start_hr 	= parseInt( $("#inputHoursSaturdayStart").val() );
	var start_mm 	= parseInt( $("#inputMinutesSaturdayStart").val() );
	var start_ampm	= $("#startSaturdaySelect").val();

	var end_hr 		= parseInt( $("#inputHoursSaturdayFinish").val() );
	var end_mm 		= parseInt( $("#inputMinutesSaturdayFinish").val() );
	var end_ampm 	= $("#finishSaturdaySelect").val();



	if(start_ampm == "pmS"){
		start_hr += 12;
	}

	if( end_ampm == "pm"){
		end_hr += 12
	}



	console.log(start_hr);
	console.log(start_mm);
	console.log(start_ampm);
	console.log(end_hr);
	console.log(end_mm);
	console.log(end_ampm);

	var totalHrs = end_hr - start_hr;
	var totalMin = start_mm + end_mm;

	if( totalMin > 60 ){

		totalHrs++;
		totalMin = totalMin - 60;
	}

	console.log( totalHrs )
	console.log( totalMin )

	totalS = totalHrs + ' : ' + totalMin;
	

	document.getElementById("totalSaturdayHours").value=totalHrs;
	document.getElementById("totalSaturdayMinutes").value=totalMin;


})

/*AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*/
$("#btnGetTheTimeSunday").click(function(){

	var start_hr 	= parseInt( $("#inputHoursSundayStart").val() );
	var start_mm 	= parseInt( $("#inputMinutesSundayStart").val() );
	var start_ampm	= $("#startSundaySelect").val();

	var end_hr 		= parseInt( $("#inputHoursSundayFinish").val() );
	var end_mm 		= parseInt( $("#inputMinutesSundayFinish").val() );
	var end_ampm 	= $("#finishSundaySelect").val();



	if(start_ampm == "pmS"){
		start_hr += 12;
	}

	if( end_ampm == "pm"){
		end_hr += 12
	}



	console.log(start_hr);
	console.log(start_mm);
	console.log(start_ampm);
	console.log(end_hr);
	console.log(end_mm);
	console.log(end_ampm);

	var totalHrs = end_hr - start_hr;
	var totalMin = start_mm + end_mm;

	if( totalMin > 60 ){

		totalHrs++;
		totalMin = totalMin - 60;
	}

	console.log( totalHrs )
	console.log( totalMin )

	totalSun = totalHrs + ' : ' + totalMin;

	document.getElementById("totalSundayHours").value=totalHrs;
	document.getElementById("totalSundayMinutes").value=totalMin;


})

	$("#btnGetTheTotalWeek").click(function(){

	var total_hrM 	= parseInt( $("#totalMondayHours").val() );
	var total_mmM 	= parseInt( $("#totalMondayMinutes").val() );
	var total_hrTu	= parseInt( $("#totalTuesdayHours").val() );
	var total_mmTu	= parseInt( $("#totalTuesdayMinutes").val() );
	var total_hrW   = parseInt( $("#totalWednesdayHours").val() );
	var total_mmW  	= parseInt( $("#totalWednesdayMinutes").val() );
	var total_hrTh  = parseInt( $("#totalThursdayHours").val() );
	var total_mmTh  = parseInt( $("#totalThursdayMinutes").val() );
	var total_hrF   = parseInt( $("#totalFridayHours").val() );
	var total_mmF   = parseInt( $("#totalFridayMinutes").val() );
	var total_hrSa  = parseInt( $("#totalSaturdayHours").val() );
	var total_mmSa  = parseInt( $("#totalSaturdayMinutes").val() );
	var total_hrSu  = parseInt( $("#totalSundayHours").val() );
	var total_mmSu  = parseInt( $("#totalSundayMinutes").val() );



		var totalHrs = total_hrM + total_hrTu+total_hrW+total_hrTh+total_hrF+total_hrSa+total_hrSu;
 		var totalMins = total_mmM+total_mmTu+total_mmW+total_mmTh+total_mmF+total_mmSa+total_mmSu;



if(totalMins>60 && totalMins<120) {
totalHrs++;
totalMins=totalMins - 60;
} else if(totalMins>120 && totalMins<180) {
totalHrs+=2;
totalMins= totalMins-120;
} else if(totalMins>180 && totalMins<240){
totalHrs+=3;
totalMins=totalMins-180;
}else if(totalMins>240 && totalMins<300){
totalHrs+=4;
totalMins=totalMins-240;
}else if(totalMins>300 && totalMins<360){
totalHrs+=5;
totalMins=totalMins-300;
}else if(totalMins>360 && totalMins<420){
totalHrs+=6;
totalMins=totalMins-360;
}


console.log( totalHrs )
	console.log( totalMins )

totalWeek = totalHrs + ' : ' + totalMins;

	document.getElementById("totalWeekHours").value=totalHrs;
	document.getElementById("totalWeekMinutes").value=totalMins;


})
});