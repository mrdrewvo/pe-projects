class TodoClass {

	constructor() {
		this.todos = [];
		this.count = 0;
	}

	add(content) {
		const todo = {
			id: this.count++,
			content,
		};
		this.todos = [...this.todos, todo];
	}


}