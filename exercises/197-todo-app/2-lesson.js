const todoApp = {

	todos: [],
	todoIdMaker: 0,

	showUpdate: function(note = "") {
		console.log(`--- ${note}`);
		console.log('My Todos:', this.todos);
	},

	add: function(content) {
		const todo = {
			id: `todo-${++this.todoIdMaker}`,
			content: content,
			};
		this.todos.push(todo);
		this.showUpdate(`Added ${content}`);
	},

	remove: function(index) {
		this.showUpdate(`Removed ${this.todos[index].content}`);
		this.todos.splice(index, 1);
	},

	complete: function(id) {
		this.todos[id].complete = true;
		this.showUpdate(`Completed ${this.todos[id].content}`);
	},
}



todoApp.add("Go to the market");

todoApp.add("Prepare dinner");

todoApp.complete(0);

todoApp.add("Call Meka");

todoApp.remove(1);
