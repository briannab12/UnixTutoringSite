/*
	File: symbolic.js
	Author: Tiffany Ellis
*/

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
		document.getElementById("tutorialImage1").src = imgLoc + "assets/images/tutorial/permissions/symbolic/symbolic_tutorial1.png";
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
	var correct = "chmod o+x file1";
	
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
		document.getElementById("tutorialImage2").src = imgLoc + "assets/images/tutorial/permissions/symbolic/symbolic_tutorial3.png";
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
	var correct = "ls -l";
	
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
		document.getElementById("tutorialImage3").src = imgLoc + "assets/images/tutorial/permissions/symbolic/symbolic_tutorial4.png";
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
	var correct = "chmod g=rwx file2";
	
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
		document.getElementById("tutorialImage4").src = imgLoc + "assets/images/tutorial/permissions/symbolic/symbolic_tutorial5.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Tutorial 5
function tutorialFive() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "ls -l";
	
	// The input box object
	var inputObj  = document.getElementById("input5");
	
	// The value the user typed into the input box
	var inputVal = inputObj.value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME ////////////////////////
		// The new image
		document.getElementById("tutorialImage5").src = imgLoc + "assets/images/tutorial/permissions/symbolic/symbolic_tutorial6.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Tutorial 6
function tutorialSix() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "chmod go-rx mydir";
	
	// The input box object
	var inputObj  = document.getElementById("input6");
	
	// The value the user typed into the input box
	var inputVal = inputObj.value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME ////////////////////////
		// The new image
		document.getElementById("tutorialImage6").src = imgLoc + "assets/images/tutorial/permissions/symbolic/symbolic_tutorial7.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}


//Tutorial 7
function tutorialSeven() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "ls -l";
	
	// The input box object
	var inputObj  = document.getElementById("input7");
	
	// The value the user typed into the input box
	var inputVal = inputObj.value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME ////////////////////////
		// The new image
		document.getElementById("tutorialImage7").src = imgLoc + "assets/images/tutorial/permissions/symbolic/symbolic_tutorial8.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}