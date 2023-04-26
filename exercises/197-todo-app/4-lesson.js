// const data = localStorage;

// data.setItem("score", "0");

// var task = {
// 	id: "todo-1",
// 	content: "take out the trash",
// 	completed: false,
// 	dateCreated: new Date(),
// };

// data.setItem("todos", "hello");

// data.setItem("todos", JSON.stringify(task));

// var todosArray = data.getItem('todos');

// console.log(JSON.parse(todosArray));

function TodoApp(name = "none") {

	this.name = name;
	
	this.data = localStorage;
	
	this.idIncrementor = 0,

	this.showUpdate = function(note = "") {
		console.log(`--- ${note}`);
		console.log('My Todos:', this.todos);
	};

	this.saveTodos = function() {
		this.data.setItem('todos', JSON.stringify(this.todos));
	};

	this.recallTodos = function() {
		return JSON.parse(this.data.getItem('todos'));
	};

	this.todos = this.recallTodos() || [];

	this.render = function() {
		document.querySelector('main').innerHTML = JSON.stringify(this.todos);
	};

	this.add = function(content) {
		const todo = {
			id: `todo-${++this.idIncrementor}`,
			content,
			};
		this.todos = [...this.todos, todo];
		
		// access local storage
		// save this.todos to key "todos" in local storage
		this.saveTodos();

		this.showUpdate(`Added ${content}`);

		this.render();
	};

	this.remove = function(index) {
		this.showUpdate(`Removed ${this.todos[index].content}`);
		this.todos.splice(index, 1);		
	
		this.saveTodos();

		this.render();
	};

	this.complete = function(id) {
		this.todos[id].complete = true;

		this.saveTodos();

		this.showUpdate(`Completed ${this.todos[id].content}`);

		this.render();
	};
	
}

const trial = new TodoApp();

trial.render();

// document.querySelector('main').innerHTML = 'test';

// trial.add('take a walk');

// const trial2 = new TodoApp();

// trial2.add('eat your veggies');

// trial2.add('pack for trip');

// trial2.remove('0');











