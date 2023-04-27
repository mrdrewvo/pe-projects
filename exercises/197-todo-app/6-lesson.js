// class TodoClass { // aka "syntatic sugar", it's not actually a class - JS doesn't have classes

// 	constructor() {
// 		this.todos = [];
// 		this.count = 0;
// 	}

// 	add(content) {
// 		const todo = {
// 			id: this.count++,
// 			content,
// 		};
// 		this.todos = [...this.todos, todo];
// 	}

// 	listTodos(todos) {
// 		this.todos.forEach ( function(todo) {
// 			console.log(todo);
// 		});
// 	}
// }

// var TodoClass = new TodoClass()

// todoClass.add("Go for a run");
// todoClass.add("Play tennis");
// todoClass.listTodos();

class TodoApp {

	constructor(name) {
		this.name = name;
		this.data = localStorage;
		this.idIncrementor = 0,
		this.todos = this.recallTodos() || [];
	}

	showUpdate(note = "") {
		console.log(`--- ${note}`);
		// console.log('My Todos:', this.todos);
	}

	saveTodos() {
		this.data.setItem('todos', JSON.stringify(this.todos));
	}

	recallTodos() {
		return JSON.parse(this.data.getItem('todos'));
	}

	renderTodos() {
		document.querySelector('main').innerHTML = JSON.stringify(this.todos);
	}

	add(content) {
		const todo = {
			id: `todo-${++this.idIncrementor}`,
			content,
			};
		this.todos = [...this.todos, todo];
		
		// access local storage & save this.todos to key "todos" in local storage
		this.saveTodos();
		this.showUpdate(`Added ${content}`);
		this.render();
	};

	remove(index) {
		this.showUpdate(`Removed ${this.todos[index].content}`);
		this.todos.splice(index, 1);		
	
		this.saveTodos();
		this.showUpdate(`Removed ${content}`);
		this.render();
	};

	complete(id) {
		this.todos[id].complete = true;

		this.saveTodos();

		this.showUpdate(`Completed ${this.todos[id].content}`);

		this.render();
	};
	
}

const trial = new TodoApp();

trial.renderTodos();