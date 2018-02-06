function questionOne() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "cp";
	
	// The input box object
	var inputObj  = document.getElementById("q1");
	
	// The value the user typed into the input box
	var inputVal = inputObj.value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME //////////////////////
		// The new image
		validCheckpointTextInput(inputObj);
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidCheckpointTextInput(inputObj);
	}
}

function questionTwo() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "mv";
	
	// The input box object
	var inputObj  = document.getElementById("q2");
	
	// The value the user typed into the input box
	var inputVal = inputObj.value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME //////////////////////
		// The new image
		validCheckpointTextInput(inputObj);
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidCheckpointTextInput(inputObj);
	}
}

function questionThree() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "ls-l";
	
	// The input box object
	var inputObj  = document.getElementById("checkpointProgramsQ3");
	
	// The value the user typed into the input box
	var inputVal = document.querySelector('input[name="insert"]:checked').value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		console.log("Correct");
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME //////////////////////
		// The new image
		validCheckpointInput(inputObj);
	}
	else
	{
		console.log("Incorrect");
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidCheckpointInput(inputObj);
	}
}

function questionFour() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "mv";
	
	// The input box object
	var inputObj  = document.getElementById("checkpointProgramsQ4");
	
	// The value the user typed into the input box
	var inputVal = document.querySelector('input[name="ques4"]:checked').value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		console.log("Correct");
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME //////////////////////
		// The new image
		validCheckpointInput(inputObj);
	}
	else
	{
		console.log("Incorrect");
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidCheckpointInput(inputObj);
	}
}

function questionFive() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "cp-v";
	
	// The input box object
	var inputObj  = document.getElementById("checkpointProgramsQ5");
	
	// The value the user typed into the input box
	var inputVal = document.querySelector('input[name="ques5"]:checked').value;
	
	// Check if the value the user typed is the correct answer
	if(inputVal == correct)
	{
		console.log("Correct");
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";
		
		////////////////////// UPDATE ME //////////////////////
		// The new image
		validCheckpointInput(inputObj);
	}
	else
	{
		console.log("Incorrect");
		// If the value is incorrect, prompts user to re-enter 
		// the command and higlight the input box red
		invalidCheckpointInput(inputObj);
	}
}