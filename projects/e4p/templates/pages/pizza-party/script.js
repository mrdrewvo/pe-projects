// Get total number of pizzas
function countPizzas() {
	var inputPizzas = document.getElementById('pizzas');
	var countPizzas = Number(inputPizzas.value);
	return countPizzas;
}

// Get total number of slices of pizza
function totalSlices() {
	// get number of slices per pizza
	var inputSlicesPerPizza = document.getElementById('slices');
	var countSlicesPerPizza = Number(inputSlicesPerPizza.value);
	// calculate total slices
	var totalSlices = countPizzas() * countSlicesPerPizza;
	return totalSlices;
}

// Get total people
function countPeople() {
	// get number of people
	var inputPeople = document.getElementById('people');
	var countPeople = Number(inputPeople.value);
	return countPeople;
}

// Calculate slices per person
function slicesPerPerson() {
	// divide totalSlices by number of people (and round down)
	var slicesPerPerson = Math.floor(totalSlices() / countPeople());
	return slicesPerPerson;
}

// Calculate remaining slices (hint: look up remainder operator)
function leftoverSlices() {
	var leftoverSlices = totalSlices() % countPeople();
	return leftoverSlices;
}

function pluralize(singularWord, count) {
	if (count > 1) {
		if (singularWord == 'person') {
			return 'people';
		} if (singularWord == 'is') {
			return 'are';
		} else {
			return `${singularWord}s`;
		}		
	} if (count == 0) {
		if (singularWord == 'is') {
			return 'are';
		} if (singularWord == 'piece') {
			return 'pieces';
		} else {
			return singularWord;	
		}
	} else {
		return singularWord;
	}
}

// Create a message
function pizzaMessage() {
	var pizzaMessage = `
		<div class="output-message">
			<p>Hi! We have ${countPeople()} ${pluralize('person',countPeople())} with ${countPizzas()} ${pluralize('pizza', countPizzas())}.</p>
			<p>Each person gets ${slicesPerPerson()} ${pluralize('piece',slicesPerPerson())} of pizza.</p>
			<p>There ${pluralize('is',leftoverSlices())} ${leftoverSlices()} leftover ${pluralize('piece',leftoverSlices())}.</p>
		</div>`;
	return pizzaMessage;
}

// Output a message
const $formPizzaParty = document.querySelector('.pizza-party form');
const $outputPizzaParty = document.querySelector('.pizza-party output');

$formPizzaParty.addEventListener('submit',function(myEvent) {
	myEvent.preventDefault();
	$outputPizzaParty.innerHTML = pizzaMessage()
})

// Clear output if one of the input changes
$formPizzaParty.addEventListener('input', function() {
	$outputPizzaParty.innerHTML = ``;
})







