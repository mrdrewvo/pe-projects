function retrieveInput(reference) {
	var input = document.getElementById(reference);
	var inputValue = Number(input.value);
	return inputValue;
}

// Calculate total alochol consumed
function totalAlcConsumed() {
	return retrieveInput('countDrinks') * retrieveInput('alcoholPerDrink');
}

// Get the right alc ratio based on the entered sex
function alcRatio() {
	var inputSex = document.querySelector('input[name="sex"]:checked');
	var inputSexValue = inputSex.value

	if (inputSexValue == "M") {
		return 0.73;
	} else {
		return 0.66;
	}
}

// Calculate the BAC
function bac() {
	var bac = (totalAlcConsumed() * 5.14 / retrieveInput('weight') * alcRatio()) - 0.015 * retrieveInput('timeSinceDrink');
	var bacValue = bac.toFixed(3);
	return bacValue;
}

function generateMessage() {
	return '<p>hello</p>';
}

// Output a message
const $formBac = document.querySelector('.blood-alcohol-calculator form');

const $outputBac = document.querySelector('.blood-alcohol-calculator output');

function renderMessage() {
	$outputBac.innerHTML = generateMessage()
}

function clearMessage() {
	$outputBac.innerHTML = ``;
}

$formBac.addEventListener('submit',function(myEvent) {
	myEvent.preventDefault();
	renderMessage();
})

// Clear output if one of the input changes
$formBac.addEventListener('input', function() {
	clearMessage();
})










