/**
 * @author AlejandroV
 */
var timerObj;
var totalSeconds;

function createTimer(timerId,time){
	timerObj = document.getElementById(timerId);
	totalSecods = time;
	updateTimer();
	windows.setTimeout("trick",1000);
}
function trick(){
	totalSeconds -= 1;
	updateTimer();
	window.setTimeout("trick",1000)
}
function UpdateTimer() {
	timerObj.innerHTML = TotalSeconds;
}