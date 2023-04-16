// function Monster(name, age) { // Constructive functions are written with a capital letter

// 	this.name = name,
// 	this.age = age,

// 	this.roar =  function() {
// 		alert(`${this.name}!!!!`);
// 	}

// }

// const chunky = new Monster("Chunky", 15);

// const munchy = new Monster("Munchy", 45);

// chunky.roar();

// console.log(munchy.name);

// munchy.roar();

// Monster.prototype.whisper = function() {
// 	console.log(`... hi my name is ${this.name}`)
// };


function TodoApp(name = "none") {

	this.name = name;
	this.todos = [];
	
	this.idIncrementor = 0,

	this.showUpdate = function(note = "") {
		console.log(`--- ${note}`);
		console.log('My Todos:', this.todos);
	};

	this.add = function(content) {
		const todo = {
			id: `todo-${++this.idIncrementor}`,
			content,
			};
		this.todos = [...this.todos, todo];
		this.showUpdate(`Added ${content}`);
	};

	this.remove = function(index) {
		this.showUpdate(`Removed ${this.todos[index].content}`);
		this.todos.splice(index, 1);		
	};

	this.complete = function(id) {
		this.todos[id].complete = true;
		this.showUpdate(`Completed ${this.todos[id].content}`);
	};
}

const trial = new TodoApp();

trial.add('take a walk');

const trial2 = new TodoApp();

trial2.add('eat your veggies');

trial2.add('pack for trip');

trial2.remove('0');














