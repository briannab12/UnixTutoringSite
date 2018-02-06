//Tutorial 1
function tutorialOne() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "ls -l";
	
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
		document.getElementById("tutorialImage1").src = imgLoc + "assets/images/tutorial/basics/flagsLAfter.jpg";
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
	var correct = "cp -p";
	
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
		document.getElementById("tutorialImage2").src = imgLoc + "assets/images/tutorial/basics/flagsPAfter.jpg";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Tutorial 1
function tutorialThree() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "mv -i";
	
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
		document.getElementById("tutorialImage3").src = imgLoc + "assets/images/tutorial/basics/flagsIAfter.jpg";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Tutorial 2
function tutorialFour() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "cp -v";
	
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
		document.getElementById("tutorialImage4").src = imgLoc + "assets/images/tutorial/basics/flagsVAfter.jpg";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}