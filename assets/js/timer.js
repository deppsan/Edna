/**
 * @author AlejandroV
 */
var timerObj;
var totalSeconds;
var btn;
function createTimer(timerId,time,btn){
	timerObj = document.getElementById(timerId);
	btnObject = document.getElementById(btn);
	totalSeconds = time;
	
	UpdateTimer();
	setTimeout(function(){trick();},1000);
}
function trick(){
	totalSeconds -= 1;
	UpdateTimer();
	if(totalSeconds > 0){
	setTimeout(function(){trick();},1000);
	}else{
		$(btnObject).click();	
	}	
}
function UpdateTimer() {
	var min = totalSeconds/60;
	min = String(min);
	var seg = totalSeconds - parseInt(min.split(".")[0])*60;
	if(seg < 10){
		seg = "0"+seg;
	}
	timerObj.innerHTML = min.split(".")[0]+":"+seg;
}