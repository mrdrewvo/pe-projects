console.clear();

var formPizzaParty = document.querySelector('.pizza-party form');

// Initialize input variables and output message
var inputPeople = document.getElementById("people");
var inputPizzas = document.getElementById("pizzas")
var inputSlicesPerPizza = document.getElementById("slices");
var outputPizza = document.querySelector('output.message');

// Convert input variables to number type
var countPeople = Number(inputPeople.value);
var countPizzas = Number(inputPizzas.value);
var slicesPerPizza = Number(inputSlicesPerPizza.value);
	
// Initalize calculated variables
var totalSlices = countPizzas * slicesPerPizza;
var slicesPerPerson = totalSlices / countPeople;
var leftoverSlices = totalSlices - slicesPerPerson * countPeople;

// Initialize and set plural tenses for output message
var personOrPeople = "person";
if(countPeople.value > 1) { 
	personOrPeople = "people";
}

var pieceOrPieces1 = "piece";
if(slicesPerPerson > 1) {
	 pieceOrPieces1 = "pieces";
}

var pizzaOrPizzas = "pizza";
if(countPizzas.value > 1) {
	pizzaOrPizzas = "pizzas";
}
	
var isOrAre = "is";
var pieceOrPieces2 = "piece";
if (leftoverSlices != 1) {
	isOrAre = "are";
	pieceOrPieces2 = "pieces";
}

formPizzaParty.addEventListener('submit', function(myEvent) {
	console.clear();
	
	myEvent.preventDefault();
	
	console.log('You clicked submit on this form.');

	console.log('countPeople: ', countPeople);
	console.log('countPizzas: ', countPizzas);;
	console.log('slicesPerPizza: ', slicesPerPizza);

	console.log('totalSlices: ', totalSlices);
	console.log('slicesPerPerson: ', slicesPerPerson);
	console.log('leftoverSlices: ', leftoverSlices);

	console.log('personOrPeople: ', personOrPeople);
	console.log('pieceOrPieces1: ', pieceOrPieces1);
	console.log('pizzaOrPizzas: ', pizzaOrPizzas);
	console.log('isOrAre: ', isOrAre);
	console.log('pieceOrPieces2: ', pieceOrPieces2);

	console.log('outputPizza: ', outputPizza);
	console.log('message: ', message);

	var message = `<p>HI! We have ${countPeople} ${personOrPeople} with ${countPizzas} ${pizzaOrPizzas}.</p>
					<p>Each person gets ${slicesPerPerson} ${pieceOrPieces1} of pizza.</p>
					<p>There ${isOrAre} ${leftoverSlices} leftover ${pieceOrPieces2}.</p>`;
	outputPizza.innerHTML = `${message}`;
})




