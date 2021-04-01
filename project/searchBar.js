var width = 0;
var maxWidth = 80;
var alreadyOpen = false;

function expandSearchBar() {
	if (!alreadyOpen) {
		// don't keep expanding the searchbox if button clicked continuously
		alreadyOpen = true;

		// get searchbox element
		box = document.getElementById('searchbox');

		// check what gets clicked on
		document.addEventListener("click", indentifyClick);

		// check for when user leaves the page
		document.addEventListener("unload", removeEventListeners);

		// display box with expanding visual
		box.style.visibility = "visible";
		expand = setInterval(incrementWidth, 1);
	}
	// place cursor in the searchbox once the search menu is expanded
	box.focus();
}

function indentifyClick(event) {
	// if user reclicked the search button don't let anything be done in the click event
	if ((event.target.id == "searchButton") || (event.target.id == "icon") || (event.target.id == "searchbox")) {
		// if search button is pressed while search box is already open: submit the form
		if (width == maxWidth) {
			document.getElementById("searchForm").submit();
		}
	}
	// user clicked something else other than the search button or searchbox
	else {
		// collapse the searchbox
		shrink = setInterval(decrementWidth, 1);
	}
}

function incrementWidth() {
	// expand the searchbox
	searchBox = document.getElementById('searchbox');
	width += 1;
	searchBox.style.width = width + '%';

	// stop expanding the searchbox
	if (width == maxWidth) {
		clearInterval(expand);
	}
}

function decrementWidth() {
	// reset variable to allow expanding of the searchbox again
	alreadyOpen = false;

	// colapse the search box
	search= document.getElementById('searchbox');
	width -= 1;
	search.style.width = width + '%';

	// finished colapsing the searchbox: reset variables
	if (width == 0) {
		clearInterval(shrink);
		search.style.visibility = "hidden";
	}
}

function removeEventListeners() {
	// remove event listeners in preparation of other pages
	document.removeEventListener("click", indentifyClick);
	document.removeEventListener("unload", removeEventListeners);
}



