// retrieve our inputs
function retrieveInput(id) {
	var input = document.getElementById(id);
	var inputValue = Number(input.value);
	return inputValue;
}




// calculate the subtotal




// calculate the tax




// calculate the total price




// Pluralize
function pluralize(singularWord, count) {
	if (count > 1) {
		if (singularWord == 'foot') {
			return 'feet';
		} else {
			return `${singularWord}s`;
		}
	}
	return singularWord;
}

// Create a message
function generateMessage() {
	return `
		<div class="output-message">
			<p>Hi! You will need to purchase <span>${countPaintGallons()} ${pluralize('gallon', countPaintGallons())} of paint</span></p>
			<p>to cover <span>${ceilingArea()} square ${pluralize('foot', ceilingArea())}.</span></p>
		</div>`;
}

// Output a message
const $formPaintCalculator = document.querySelector('.paint-calculator form');
const $outputPaintCalculator = document.querySelector('.paint-calculator output');

function renderMessage() {
	$outputPaintCalculator.innerHTML = generateMessage()
}

function clearMessage() {
	$outputPaintCalculator.innerHTML = ``;
}

$formPaintCalculator.addEventListener('submit',function(myEvent) {
	myEvent.preventDefault();
	renderMessage();
})

// Clear output if one of the input changes
$formPaintCalculator.addEventListener('input', function() {
	clearMessage();
})

