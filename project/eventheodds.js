function eventheodds() {
	// keep adding location page names here
	locations = ['krause', 'mayfield', 'mckinney', 'waterloo', 'zilker',
	'bullock', 'blanton', 'weird', 'thinkery', 'capitol', 
	'acl', 'sxsw', 'zach', 'long', '6th',
	'pcl', 'monkey', 'medici', 'fac', 'union',
	'homeslice', 'gus', 'gourdoughs', 'patio', 'franklins',
	'dkr', 'greg', 'circuit', 'fec', 'bouldering'];

	randomIdx = Math.trunc(Math.random()*locations.length);

	page = locations[randomIdx] + ".html"
	console.log (page);

	document.getElementById('randomLocation').href = page;
}