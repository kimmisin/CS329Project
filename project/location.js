var big;

window.onload = function() {
	big = document.getElementById("big").src;
}

function changeImage(event) {
	currentBig = document.getElementById("big").src;
	big = currentBig;
	currentImage = document.getElementById(event.currentTarget.id).src;
	document.getElementById("big").src = currentImage;
	document.getElementById(event.currentTarget.id).src = big;
}
