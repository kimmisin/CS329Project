function eventheodds() {
	// keep adding location page names here
	locations = ['krause', 'mayfield', 'mckinney', 'waterloo', 'zilker'];

	randomIdx = Math.trunc(Math.random()*locations.length);

	page = locations[randomIdx] + ".html"
	console.log (page);

	document.getElementById('randomLocation').href = page;
}