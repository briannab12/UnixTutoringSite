//Tutorial 1
function tutorialOne()
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "vim test.html";

	// The input box object
	var inputObj  = document.getElementById("input1");

	// The value the user typed into the input box
	var inputVal = inputObj.value;

	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";

		////////////////////// UPDATE ME //////////////////////
		// The new image
		document.getElementById("tutorialImage1").src = "../assets/images/tutorial/programsInstallation/vimLaunchAfter.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Tutorial 2
function tutorialTwo()
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "dd";

	// The input box object
	var inputObj  = document.getElementById("input2");

	// The value the user typed into the input box
	var inputVal = inputObj.value;

	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";

		////////////////////// UPDATE ME //////////////////////
		// The new image
		document.getElementById("tutorialImage2").src = "../assets/images/tutorial/programsInstallation/vimDeleteLineAfter.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Tutorial 3
function tutorialThree()
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "u";

	// The input box object
	var inputObj  = document.getElementById("input3");

	// The value the user typed into the input box
	var inputVal = inputObj.value;

	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";

		////////////////////// UPDATE ME //////////////////////
		// The new image
		document.getElementById("tutorialImage3").src = "../assets/images/tutorial/programsInstallation/vimUndoLine.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Tutorial 4
function tutorialFour()
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = ":wq";

	// The input box object
	var inputObj  = document.getElementById("input4");

	// The value the user typed into the input box
	var inputVal = inputObj.value;

	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";

		////////////////////// UPDATE ME //////////////////////
		// The new image
		document.getElementById("tutorialImage4").src = "../assets/images/tutorial/programsInstallation/vimExitAfter.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}
