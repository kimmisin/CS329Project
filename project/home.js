var image_source = new Array("krause1.jpg", "medici1.jpg", "franklins1.jpg", "sxsw2.png", "union1.jpg", "gordoughs1.jpg");  

var image_link = new Array("krause.php", "medici.php", "franklins.php", "sxsw.php", "union.php", "gordoughs.php");

var caption = new Array("Explore Krause", "Explore Medici", "Explore Franklins BBQ","Explore SXSW","Explore The Union", "Explore Gordoughs");

var idx = -1;

function changeImage(){
	idx = (idx + 1) % image_source.length;
	document.getElementById("slideimage").setAttribute("src", image_source[idx]);
	document.getElementById("slidelink").setAttribute("href", image_link[idx]);
	document.getElementById("slidecaption").innerHTML = caption[idx];
	document.getElementById("slidecaption").setAttribute("href", image_link[idx]);
	counter = setTimeout(changeImage, 3000);
}


