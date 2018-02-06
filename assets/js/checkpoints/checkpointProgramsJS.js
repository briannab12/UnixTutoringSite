function questionOne()
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "command";

	// The input box object
	var inputObj  = document.getElementById("checkpointProgramsQ1");

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
		document.getElementById("quiz1Wrong").style = "display:none;"
		document.getElementById("quiz1Right").style = "display:inline;"
	}
	else
	{
		console.log("Incorrect");
		// If the value is incorrect, prompts user to re-enter
		// the command and higlight the input box red
		invalidCheckpointInput(inputObj);
		document.getElementById("quiz1Wrong").style = "display:inline;"
		document.getElementById("quiz1Right").style = "display:none;"
	}
}

function questionTwo()
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "dd";

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
		document.getElementById("quiz2Wrong").style = "display:none;"
		document.getElementById("quiz2Right").style = "display:inline;"
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter
		// the command and higlight the input box red
		invalidCheckpointTextInput(inputObj);
		document.getElementById("quiz2Wrong").style = "display:inline;"
		document.getElementById("quiz2Right").style = "display:none;"
	}
}

function questionThree()
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = "i";

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
		document.getElementById("quiz3Wrong").style = "display:none;"
		document.getElementById("quiz3Right").style = "display:inline;"

	}
	else
	{
		console.log("Incorrect");
		// If the value is incorrect, prompts user to re-enter
		// the command and higlight the input box red
		invalidCheckpointInput(inputObj);
		document.getElementById("quiz3Wrong").style = "display:inline;"
		document.getElementById("quiz3Right").style = "display:none;"
	}
}

function questionFour()
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct = [true,true,true,true];

	// The input box object
	var inputObj  = document.getElementById("checkpointProgramsQ4");

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
		document.getElementById("quiz4Wrong").style = "display:none;"
		document.getElementById("quiz4Right").style = "display:inline;"
	}
	else
	{
		console.log("Incorrect");
		// If the value is incorrect, prompts user to re-enter
		// the command and higlight the input box red
		invalidCheckpointInput(inputObj);
		document.getElementById("quiz4Wrong").style = "display:inline;"
		document.getElementById("quiz4Right").style = "display:none;"
	}
}

function questionFive()
{
	////////////////////// UPDATE ME //////////////////////
	// The correct answer
	var correct1 = ":wq";
	var correct2 = ":wq!";
	var correct3 = "zz";

	// The input box object
	var inputObj  = document.getElementById("q5");

	// The value the user typed into the input box
	var inputVal = inputObj.value;

	// Check if the value the user typed is the correct answer
	if(inputVal == correct1 || inputVal == correct2 || inputVal == correct3)
	{
		// If the value is correct, update the terminal image
		inputObj.style.boxShadow = "0px 0px 0px 0px red";

		////////////////////// UPDATE ME //////////////////////
		// The new image
		validCheckpointTextInput(inputObj);
		document.getElementById("quiz5Wrong").style = "display:none;"
		document.getElementById("quiz5Right").style = "display:inline;"
	}
	else
	{
		// If the value is incorrect, prompts user to re-enter
		// the command and higlight the input box red
		invalidCheckpointTextInput(inputObj);
		document.getElementById("quiz5Wrong").style = "display:inline;"
		document.getElementById("quiz5Right").style = "display:none;"
	}
}
