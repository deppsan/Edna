/**
 * @author AlejandroV
 */
var timerObj;
var totalSeconds;

function createTimer(timerId,time){
	timerObj = document.getElementById(timerId);
	totalSeconds = time;
	UpdateTimer();
	setTimeout(function(){trick();},1000);
}
function trick(){
	totalSeconds -= 1;
	UpdateTimer();
	if(totalSeconds > 0){
	setTimeout(function(){trick();},1000);
	}
	
}
function UpdateTimer() {
	timerObj.innerHTML = totalSeconds;
}