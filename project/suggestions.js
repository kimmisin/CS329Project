//$(document).ready (function () {


	// emails just need to have an @ and either .com, .net, or .edu to be valid
	//$("#email").click(function(event) {
	function validateEmail(event) {
		console.log ("email")
		// get email input with jQuery
		input = $('input[name="email"]').val();

		// remove leading and trailing whitespace with jQuery function
		input = $.trim(input);
		console.log("*"+ input +"*")
		if (input == '') {
			alert("Invalid email, please try again.")
			validEmail = false;
		}
		else {
			// parse through the email with normal Javascript
			hasAt = false;
			reachedPeriod = false;
			validEmail = true;
			for (i=0; i<input.length; i++) {
				code = input.charCodeAt(i);
				// is a white space 
				if (code == 32) {
					alert("Invalid email, please try again.")
					validEmail = false;
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
							console.log('valid email!')
							//alert("Your email has been added to our email list. Thank you for subscribing!");
							break;
						}
						else {
							alert("Invalid email, please try again.")
							validEmail = false;
							break;
						}
					}
					// possibly not the last period
					else {reachedPeriod = false;}
				}
				// last for loop and no @ or period found
				if ((i == input.length-1) && (hasAt == false || reachedPeriod == false)) {
						alert("Invalid email, please try again.");
						validEmail = false;
				}
			}
		}
		if (validEmail) {
			//alert("<?php echo storeInput();?>");
			return true;
		}
		else {
			//event.preventDefault();
			return false;
		}
	}//);

	// Ensure there is no blank entry other than the optional comments area
	//$("#surveyForm").click(function(event) {
	function validateSurvey(event) {
		console.log ("surveyForm")
		var blank = false;
		// Access the dropdown question regarding UT affiliation
		var input = $('#affiliation :selected').text();
		console.log ("affiliation:", input)
		if (!blank && input == "-") {
			blank = true;
			alert("Survey Submit Failed\n\nItem left blank: \nAre you afiliated with UT Austin?");
		}

		// Access the dropdown question regarding experience with Austin
		input = $('#experience :selected').text();
		console.log ("experience: ", input)
		if (!blank && input == "-") {
			blank = true;
			alert("Survey Submit Failed\n\nItem left blank: \nWhat is your experience with Austin?")
		}

		// Access the checkbox question:
		// Indicate which of the following activity types you are interested in our site displaying more locations of.
		//input = $('input[name="interest[]"]:checked').val();
		inputs = document.getElementsByName("interest[]");
		input = [];
		for (i=0; i<inputs.length; i++) {
			if (inputs[i].checked) {input.push(inputs[i].value);}
		}
		console.log ("interest[]: ", input, input.length);
		if (!blank && input.length == 0) {
			blank = true;
			alert("Survey Submit Failed\n\nItem left blank: \nwhich activity type(s) do you want our site to display more of?");
		}

		// no blanks: form verified
		if (!blank) {
			//alert("<?php echo storeInput();?>");
			return true;
		} else {
			// form incomplete: prevent page refresh
			//event.preventDefault();
			return false;
		}

	}//);
//});
