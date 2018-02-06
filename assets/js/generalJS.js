// Server Location
var imgLoc = "http://kelvin.ist.rit.edu/~unix4ux/";

// Is called when the user types the incorrect command in a tutorial input box.
// It clears the input value, highlights the box red, and prompts user to enter 
// the given command.
function invalidTutorialInput(inputBox)
{
	inputBox.value = "";
	inputBox.style.boxShadow = "0px 0px 4px 1px red";
	inputBox.placeholder = "Incorrect. Try again!";
}

/********* QUIZ CORRECTOR ***********/

// FOR TEXT INPUT 
// PARAMETER: inputBox - the object of the text input box.
// ex: validCheckpointInput(document.getElementById("inputText1"))
function invalidCheckpointTextInput(inputBox)
{
	inputBox.value = "";
	inputBox.style.boxShadow = "0px 0px 20px 2px red";
	//inputBox.placeholder = "Please try again!";
	
	// If the error message is not displaying, show it
	if( !inputBox.parentNode.getElementsByClassName("error-message")[0].classList.contains('show') ){
		inputBox.parentNode.getElementsByClassName("error-message")[0].classList.toggle('show');
	}
	// If the correct message is showing, hide it
	if(	inputBox.parentNode.getElementsByClassName("correct-message")[0].classList.contains('show') ){
		inputBox.parentNode.getElementsByClassName("correct-message")[0].classList.toggle('show')
	}
}
// FOR TEXT INPUT 
// PARAMETER: inputBox - the object of the text input box.
// ex: validCheckpointInput(document.getElementById("inputText1"))
function validCheckpointTextInput(inputBox)
{
	inputBox.style.boxShadow = "0px 0px 20px 2px green";
	
	// If the error message is displaying, hide it
	if( inputBox.parentNode.getElementsByClassName("error-message")[0].classList.contains('show') ){
		inputBox.parentNode.getElementsByClassName("error-message")[0].classList.toggle('show');
	}
	// If the correct message is now showing, display it
	if(	!inputBox.parentNode.getElementsByClassName("correct-message")[0].classList.contains('show') ){
		inputBox.parentNode.getElementsByClassName("correct-message")[0].classList.toggle('show')
	}
}
// FOR RADIO AND CHECKBOXES
// PARAMETER: inputObj - the object of the form.
// ex: validCheckpointInput(document.getElementById("form1"))
function validCheckpointInput(inputObj){
	inputObj.style.boxShadow = "0px 0px 20px 2px green";
	
		// If the error message is displaying, hide it
	if( inputObj.getElementsByClassName("error-message")[0].classList.contains('show') ){
		inputObj.getElementsByClassName("error-message")[0].classList.toggle('show');
	}
	// If the correct message is now showing, display it
	if(	!inputObj.getElementsByClassName("correct-message")[0].classList.contains('show') ){
		inputObj.getElementsByClassName("correct-message")[0].classList.toggle('show')
	}
}
// FOR RADIO AND CHECKBOXES
// PARAMETER: inputObj - the object of the form.
// ex: validCheckpointInput(document.getElementById("form1"))
function invalidCheckpointInput(inputObj)
{
	inputObj.style.boxShadow = "0px 0px 20px 2px red";
	
		// If the error message is not displaying, show it
	if( !inputObj.getElementsByClassName("error-message")[0].classList.contains('show') ){
		inputObj.getElementsByClassName("error-message")[0].classList.toggle('show');
	}
	// If the correct message is showing, hide it
	if(	inputObj.getElementsByClassName("correct-message")[0].classList.contains('show') ){
		inputObj.getElementsByClassName("correct-message")[0].classList.toggle('show')
	}
}

/******** OPENS AND CLOSSES THE SIDE MENU ***********/
window.onload = function() {
    // Open and close the side menu
	document.getElementById("tab").onclick = function sideMenu(){
		document.getElementById("side-nav").classList.toggle('hide');
		document.getElementById("side-nav").getElementsByTagName('h2')[0].classList.toggle('hide');
		var sections = document.getElementsByClassName("content");
		for (index = 0; index < sections.length; ++index) {
			sections[index].classList.toggle('wide');
		}
	}
}

/********** MOBILE MENU CLICK EVENTS **************/
function mobileMenuHome(){
	location.href = "http://serenity.ist.rit.edu/~bab7607/ISTE240/Group/index.php";
}

function mobileMenuMenu(){
	document.getElementById("side-nav").classList.toggle('mobileShow');
}

function mobileMenuIndex(){
	location.href = "http://serenity.ist.rit.edu/~bab7607/ISTE240/Group/commandIndex/searchByFunctionality.php";
}

function mobileMenuAbout(){
	location.href = "http://serenity.ist.rit.edu/~bab7607/ISTE240/Group/aboutUs.php";
}