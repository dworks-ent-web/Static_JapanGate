/*
** Regular Expression function
**
** no quotations for regex
** regex => /^[A-Z]$/u
** str => "STRING"
*/
function preg_match(regex, str) {
	let result = str.match(regex);
	if (result) {
		return 1;
	} else {
		return 0;
	}
}