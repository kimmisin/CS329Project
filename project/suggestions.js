$(document).ready (function () {


	// emails just need to have an @ and either .com, .net, or .edu to be valid
	$("#email").click(function(event) {
		// get email input with jQuery
		input = $('input[name="email"]').val();

		// remove leading and trailing whitespace with jQuery function
		input = $.trim(input);

		// parse through the email with normal Javascript
		hasAt = false;
		reachedPeriod = false;
		for (i=0; i<input.length; i++) {
			code = input.charCodeAt(i);
			// is a white space 
			if (code == 32) {
				alert("Invalid email, please try again.")
				break;
			}
			// is an @
			else if(code == 64) {hasAt = true;}
			// is a period
			else if (code == 46) {
				reachedPeriod = true;
				continue;
			}
			// check if characters after the period
			if (reachedPeriod && hasAt) {
				last = input.substring(i, input.length);
				if (last.length == 3) {
					// accept .com, .net, or .edu emails only
					if (last == "com" || last == "net" || last == "edu") {
						alert("Your email has been added to our email list. Thank you for subscribing!");
						break;
					}
					else {
						alert("Invalid email, please try again.")
						break;
					}
				}
				// possibly not the last period
				else {reachedPeriod = false;}
			}
			// last for loop and no @ or period found
			if ((i == input.length-1) && (hasAt == false || reachedPeriod == false)) {
					alert("Invalid email, please try again.");
			}
		}
	});

	// Ensure there is no blank entry other than the optional comments area
	$("#surveyForm").click(function(event) {
		var blank = false;
		// Access the dropdown question regarding UT affiliation
		var input = $('#affiliation :selected').text();
		console.log ("affiliation:", input)
		if (!blank && input == "") {
			blank = true;
			alert("Survey Submit Failed\n\nItem left blank: \nAre you afiliated with UT Austin?");
		}

		// Access the dropdown question regarding experience with Austin
		input = $('#experience :selected').text();
		console.log ("experience: ", input)
		if (!blank && input == "") {
			blank = true;
			alert("Survey Submit Failed\n\nItem left blank: \nWhat is your experience with Austin?")
		}

		// Access the checkbox question:
		// Indicate which of the following activity types you are interested in our site displaying more locations of.
		input = $('input[name="interest"]:checked').val();
		if (!blank && input == undefined) {
			blank = true;
			alert("Survey Submit Failed\n\nItem left blank: \nwhich activity type(s) do you want our site to display more of?");
		}

		// no blanks: form verified
		if (!blank) {
			alert("Survey submited, thank you for your input!");
			return true;
		} else {
			// form incomplete: prevent page refresh
			event.preventDefault();
		}

	});
});