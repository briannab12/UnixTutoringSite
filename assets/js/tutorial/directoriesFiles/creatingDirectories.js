//Create directories tutorial 1
function CreateDirectoryOne() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "mkdir mydir";
	
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
		document.getElementById("CreateDirectoryImage1").src = imgLoc + "assets/images/tutorial/directoriesFiles/Createdirectories1.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Delete File tutorial 2
function CreateDirectoryTwo() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "mkdir mydir/b";
	
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
		document.getElementById("CreateDirectoryImage2").src = imgLoc + "assets/images/tutorial/directoriesFiles/Createdirectories2.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}