// #todo - see how to make multiple shopping lists

const shoppingListApp = {

	shoppingList: [],
	idNumStart: 0,

	// response
	functionResponse: function(note = "") {
		console.log(note);
		console.log(this.shoppingList);
	},

	// add an item to the list
	add: function(itemName) {
		
		const found = this.shoppingList.find(function(item) {
			return item.itemName == itemName;
		});

		if(found) {

			const index = this.shoppingList.indexOf(found);

			if(this.shoppingList[index].status == "pending") {
				this.functionResponse(`"${itemName}" is already on your list and waiting to be bought! Check your list below.`);	
			} else {
				const index = this.shoppingList.indexOf(found);
				this.shoppingList[index].status = "pending";
				this.functionResponse(`"${itemName}" was previously on your list. I'll mark it as pending again!`);
			};

		// if not found, proceed to add it to the list
		} else {

			// add full object to the list by name
			this.shoppingList.push({
				id: `item-${++this.idNumStart}`,
				itemName: itemName,
				status: `pending`,
				dateAdded: Date.now(),
				lastBought: [],
			});

			// print confirmation
			this.functionResponse(`You've added "${itemName}" to your shopping list.`)
		};
	},

	// remove - gonna try to remove by item name instead of item number
	// users are probably used to the item name (though they'll need to type it in just right)
	remove: function(itemName) {

		// check if item is on the list
		const found = this.shoppingList.find(function(item) {
			return item.itemName == itemName;
		});

		// if yes, remove item
		if(found) {
			const index = this.shoppingList.indexOf(found);
			this.shoppingList.splice(index, 1);
			this.functionResponse(`"${itemName}" removed from the shopping list.`);

		// if no, respond that item is not found on the list
		} else {
			console.log(`"${itemName}" not found on this list.`)
		}
	},

	// mark as bought
	bought: function(itemName) {
		
		// check if item is on the list
		const found = this.shoppingList.find(function(item) {
			return item.itemName == itemName;
		});

		// if yes, update status to 'bought'
		if (found) {
			const index = this.shoppingList.indexOf(found);
			this.shoppingList[index].status = "bought";
			this.shoppingList[index].lastBought.push(Date.now());
			this.functionResponse(`"${itemName}" marked as bought! You big spender, you.`);

		// if no, respond that item is not found on the list
		} else {
			console.log(`"${itemName}" not found on this list.`)
		};
	}
}


// QA tests

shoppingListApp.add("apples");
shoppingListApp.add("bananas");

shoppingListApp.remove("bananas");
shoppingListApp.remove("oranges");

shoppingListApp.bought("apples");

shoppingListApp.add("apples");
shoppingListApp.bought("apples");






