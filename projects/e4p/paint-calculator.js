// Get length in feet
// Get width in feet
// Get coverage area per gallon

// Ended up doing all three with one function
function retrieveInput(reference) {
	var input = document.getElementById(reference);
	var inputValue = Number(input.value);
	return inputValue;
}

console.log('Length: ', retrieveInput('length'));
console.log('Width: ', retrieveInput('width'));
console.log('Coverage Area per Paint Gallon: ', retrieveInput('gallonCoverage'));

// Calculate the ceiling area
function ceilingArea() {
	var ceilingArea = retrieveInput('length') * retrieveInput('width');
	return ceilingArea;
}

console.log('Ceiling Area: ', ceilingArea());

// Calculate the number of gallons required
function countPaintGallons() {
	var countPaintGallons = Math.ceil(ceilingArea() / retrieveInput('gallonCoverage'));
	return countPaintGallons;
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
	} else {
		return singularWord;
	}
}

// Create a message
function paintMessage() {
	var paintMessage = `
			<p>You will need to purchase <span>${countPaintGallons()} ${pluralize('gallon', countPaintGallons())} of paint</span></p>
			<p>to cover <span>${ceilingArea()} square ${pluralize('foot', ceilingArea())}.</span></p>`;
	return paintMessage;
}

console.log('Output: ', paintMessage());

// Output a message
const $formPaintCalculator = document.querySelector('.paint-calculator form');
const $outputPaintCalculator = document.querySelector('.paint-calculator output');

$formPaintCalculator.addEventListener('submit',function(myEvent) {
	myEvent.preventDefault();
	$outputPaintCalculator.innerHTML = paintMessage()
})

// Clear output if one of the input changes
$formPaintCalculator.addEventListener('input', function() {
	$outputPaintCalculator.innerHTML = ``;
})

