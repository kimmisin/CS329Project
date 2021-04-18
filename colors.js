function dayMode(){
	body = document.getElementById("body");
	currentColor = window.getComputedStyle(body).backgroundColor;
	currentColor = currentColor.split("(")[1].split(")")[0];
	currentColor = currentColor.split(",");
	redCurrent = currentColor[0];
	greenCurrent = currentColor[1];
	blueCurrent = currentColor[2];
	dayInterval = setInterval(function(){
		if (redCurrent == 255){
			clearInterval(dayInterval);
		}else{
			changeColor(redCurrent, greenCurrent, blueCurrent);
			console.log("day " + redCurrent);
			redCurrent++;
			greenCurrent++;
			blueCurrent++;
		}
	}, 5); 
}

function nightMode(){
	body = document.getElementById("body");
	currentColor = window.getComputedStyle(body).backgroundColor;
	currentColor = currentColor.split("(")[1].split(")")[0];
	currentColor = currentColor.split(",");
	console.log(currentColor);
	redCurrent = currentColor[0];
	greenCurrent = currentColor[1];
	blueCurrent = currentColor[2];
	console.log(redCurrent);
	nightInterval = setInterval(function(){
		if (redCurrent == 115){
			clearInterval(nightInterval);
		}else{
			changeColor(redCurrent, greenCurrent, blueCurrent);
			console.log("night " + redCurrent)
			redCurrent--;
			greenCurrent--;
			blueCurrent--;
		}
	}, 5);
}

function changeColor(red, green, blue){
	document.getElementById("body").style.backgroundColor = "rgb(" + red + "," + green + "," + blue + ")";
}