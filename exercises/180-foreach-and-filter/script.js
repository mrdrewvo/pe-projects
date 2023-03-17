var simpleDrewsItems = [
	"Apple watch",
	"Affirmations book",
	"Tissue box",
	"Soy candle",
	"Water bottle",
	"vitamin box",
	"Foam bottle",
	"Dog toy"
	]

simpleDrewsItems.forEach(function(item, index, fullArray) {
	var number = index + 1;
	console.log(number, item);
});

// ------------ which can be written as...

function printItem(item, index, fullArray) {
  var number = index + 1;
  console.log(number, item);
}

simpleDrewsItems.forEach(printItem);






var drewsItems = [
	{
		name: "Apple watch",
		type: "apparel"
	},
	{
		name: "Affirmations book",
		type: "recreational"
	},
	{
		name: "Tissue box",
		type: "supplies"
	},
	{
		name: "Soy candle",
		type: "supplies"
	},
	{
		name: "Water bottle",
		type: "equipment"
	},
	{
		name: "Vitamin box",
		type: "equipment"
	},
	{
		name: "Foam roller",
		type: "equipment"
	},
	{
		name: "Dog toy",
		type: "recreational"
	}	
];

// foreach diving into the object data with dot notation
drewsItems.forEach(function(item) {
	console.log(item.name);
	console.log("type:", item.type);
	console.log("");
});

// filtering within the foreach loop using conditional if() statement
drewsItems.forEach(function(item) {
	if(item.type == "equipment") {
		console.log(item.name);
		console.log("type:", item.type);
		console.log("");
	}
});

// filtering using the filter method then assign the filtered array to a new variable
var equipment = drewsItems.filter(function(item) {
	return item.type == 'equipment';
});

var supplies = drewsItems.filter(function(item) {
	return item.type == 'supplies';
});

console.log(equipment);
console.log(supplies);

// create a function that accepts an array, generates markup
// heading and list of items

function prettyArray(anArray, heading) {

	var h2 = document.createElement('h2')
	h2.textContent = heading;
	document.body.appendChild(h2);

	var ol = document.createElement('ol');

	anArray.forEach( function (item) {
		var li = document.createElement('li');
		li.textContent = item.name;
		ol.appendChild(li);
	});

	document.body.appendChild(ol);
}

prettyArray(supplies, 'Supplies');

prettyArray(equipment, "Equipment");







