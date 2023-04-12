// Get length in feet
// Get width in feet
// Get coverage area per gallon

// Ended up doing all three with one function
function retrieveInput(id) {
	var input = document.getElementById(id);
	var inputValue = Number(input.value);
	return inputValue;
}

console.log('Length: ', retrieveInput('length'));
console.log('Width: ', retrieveInput('width'));
console.log('Coverage Area per Paint Gallon: ', retrieveInput('gallonCoverage'));

// Calculate the ceiling area
function ceilingArea() {
	return retrieveInput('length') * retrieveInput('width');
}

console.log('Ceiling Area: ', ceilingArea());

// Calculate the number of gallons required
function countPaintGallons() {
	return Math.ceil(ceilingArea() / retrieveInput('gallonCoverage'));
}

console.log('Paint Gallons to Purchase: ', countPaintGallons());

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
			<p>You will need to purchase <span>${countPaintGallons()} ${pluralize('gallon', countPaintGallons())} of paint</span></p>
			<p>to cover <span>${ceilingArea()} square ${pluralize('foot', ceilingArea())}.</span></p>`;
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

