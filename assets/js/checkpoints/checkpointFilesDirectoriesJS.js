function questionOne() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "reg1";
	
	// The input box object
	var inputObj  = document.getElementById("checkpointFilesandDirectoriesQ1");
	
	// The value the user typed into the input box
	var inputVal = document.querySelector('input[name="mode"]:checked').value;
	
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

function questionTwo() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = [true,true,false,false];
	
	// The input box object
	var inputObj  = document.getElementById("checkpointFilesandDirectoriesQ2");
	
	// The value the user typed into the input box
	var inputBoxes = document.querySelectorAll("input[type='checkbox']");
	
	var inputVal = [];
	
	for(var i = 0; i < inputBoxes.length; i++){
		inputVal[i] = inputBoxes[i].checked;
	}
	
	console.log(correct);
	console.log(inputVal);
	console.log(inputVal == correct);
	
	// Check if the value the user typed is the correct answer
	if(JSON.stringify(inputVal)==JSON.stringify(correct))
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

function questionThree() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "mkdir";
	
	// The input box object
	var inputObj  = document.getElementById("q3");
	
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

function questionFour() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "rmdir";
	
	// The input box object
	var inputObj  = document.getElementById("q4");
	
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

function questionFive() 
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "yes";
	
	// The input box object
	var inputObj  = document.getElementById("checkpointFilesandDirectoriesQ5");
	
	// The value the user typed into the input box
	var inputVal = document.querySelector('input[name="mode"]:checked').value;
	
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