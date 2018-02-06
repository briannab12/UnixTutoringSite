//Create File tutorial 1
function CreateFileOne() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "echo 'I love learning about unix' > ex0.txt";
	
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
		document.getElementById("CreateFileImage1").src = imgLoc + "assets/images/tutorial/directoriesFiles/Createfiles1.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Create File tutorial 3
function CreateFileThree() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "printf 'I love learning about unix' > ex1.txt";
	
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
		document.getElementById("CreateFileImage3").src = imgLoc + "assets/images/tutorial/directoriesFiles/Createfiles3.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Create File tutorial 4
function CreateFileFour() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "cat ex0.txt";
	
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
		document.getElementById("CreateFileImage4").src = imgLoc + "assets/images/tutorial/directoriesFiles/Createfiles4.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Create File tutorial 5
function CreateFileFive() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "touch file1";
	
	// The input box object
	var inputObj  = document.getElementById("input5");
	
	// The value the user typed into the input box
	var inputVal = inputObj.value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME //////////////////////
		// The new image
		document.getElementById("CreateFileImage5").src = imgLoc + "assets/images/tutorial/directoriesFiles/Createfiles5.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}

//Create File tutorial 6
function CreateFileSix() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "touch file2 file3 file4";
	
	// The input box object
	var inputObj  = document.getElementById("input6");
	
	// The value the user typed into the input box
	var inputVal = inputObj.value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME //////////////////////
		// The new image
		document.getElementById("CreateFileImage6").src = imgLoc + "assets/images/tutorial/directoriesFiles/Createfiles6.png";
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidTutorialInput(inputObj);
	}
}