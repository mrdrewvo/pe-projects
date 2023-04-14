function Monster(name, age) { // Constructive functions are written with a capital letter

	this.name = name,
	this.age = age,

	this.roar =  function() {
		alert(`${name}!!!!`);
	}

}

const chunky = new Monster("Chunky", 15);

const munchy = new Monster("Munchy", 45);

chunky.roar();

console.log(munchy.name);

munchy.roar();

Monster.prototype.whisper = function() {
	console.log(`... hi my name is ${name}`)
};





const todoApp = {

	todos: [],
	idIncrementor: 0,

	showUpdate(note = "") {
		console.log(`--- ${note}`);
		console.log('My Todos:', this.todos);
	},

	add(content) {
		const todo = {
			id: `todo-${++this.idIncrementor}`,
			content: content,
			};
		this.todos = [...this.todos, todo];
		this.showUpdate(`Added ${content}`);
	},

	remove(index) {
		this.showUpdate(`Removed ${this.todos[index].content}`);
		this.todos.splice(index, 1);
	},

	complete(id) {
		this.todos[id].complete = true;
		this.showUpdate(`Completed ${this.todos[id].content}`);
	},
}

todoApp.add("Go to the market");

todoApp.add("Prepare dinner");

todoApp.add("Play tennis")

todoApp.complete(0);

todoApp.add("Call Meka");

todoApp.remove(1);
