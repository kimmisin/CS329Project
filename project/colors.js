function dayMode(){
	redCurrent = 115;
	greenCurrent = 115;
	blueCurrent = 115;
	dayInterval = setInterval(function(){
		if (redCurrent == 255){
			clearInterval(dayInterval);
		}else{
			changeColor(redCurrent, greenCurrent, blueCurrent);
			redCurrent++;
			greenCurrent++;
			blueCurrent++;
		}
	}, 5);
}

function nightMode(){
	redCurrent = 255;
	greenCurrent = 255
	blueCurrent = 255;
	nightInterval = setInterval(function(){
		if (redCurrent == 115){
			clearInterval(nightInterval);
		}else{
			changeColor(redCurrent, greenCurrent, blueCurrent);
			redCurrent--;
			greenCurrent--;
			blueCurrent--;
		}
	}, 5);
}

function changeColor(red, green, blue){
	document.getElementById("body").style.backgroundColor = "rgb(" + red + "," + green + "," + blue + ")";
}

function setDay(){
	console.log("day");
	document.getElementById("body").style.backgroundColor = "rgb(" + 255 + "," + 255 + "," + 255 + ")";
}	

function setNight(){
	console.log("night");
	document.getElementById("body").style.backgroundColor = "rgb(" + 115 + "," + 115 + "," + 115 + ")";
}	
