//easier log function
function log(message) {
	console.log(message);
}

//generate random integer (works with negative numbers! (probably...))
function randomInt(min, max) {
	var num = Math.floor(Math.random() * (max - min)) + min;
	return num;
}

/*returns a string with the current time*/
function currentTimeString() {
	var dateString = "";
	var curDate = new Date();
	var seconds = curDate.getSeconds();
	var minutes = curDate.getMinutes();
	var hours = curDate.getHours();
	var secondsString = seconds.toString();
	var minutesString = minutes.toString();
	var hoursString = hours.toString();
	var ampm = "";
	if (curDate.getHours() < 13) {
		
		ampm = "am";
		
		if (hours == 12) {
			ampm = "pm";
		}

		if (hours == 0) {
			hours = 12;
			hoursString = hours.toString();
		}
		
		
	}
	else {

		ampm = "pm";
		hours = hours - 12;
		hoursString = hours.toString();
		
	}

	if (secondsString.length == 1) {secondsString = "0"+secondsString};
	if (minutesString.length == 1) {minutesString = "0"+minutesString};
	dateString = hoursString + ":" + minutesString + ":" + secondsString + " " + ampm;
	return dateString;
}

function redirect(site, time) {
	setTimeout(function() {
		window.location.replace(site);
		}, time);
}

function countJSON(ob) {
	var count = 0;
	for (i in ob) {count+=1;}
	return count;
}