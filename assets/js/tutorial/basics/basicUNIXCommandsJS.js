//Tutorial 1
function tutorialOne() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "cp trial.html newTrial.html";
	
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
		document.getElementById("tutorialImage1").src = imgLoc + "assets/images/tutorial/basics/comCPAfter.jpg";
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
	var correct = "cat newTrial.html";
	
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
		document.getElementById("tutorialImage2").src = imgLoc + "assets/images/tutorial/basics/comCATAfter.jpg";
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
	var correct = "mv newTrial.html ../";
	
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
		document.getElementById("tutorialImage3").src = imgLoc + "assets/images/tutorial/basics/comMVAfter.jpg";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}