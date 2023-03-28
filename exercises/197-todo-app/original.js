function showUpdate(note = "") {
	console.log(`--- ${note}`);
	console.log('My Todos:', todos);
}

const todos = [];
var count = 0;

function add(content) {
	const todo = {
		id: `todo-${count++}`,
		content: content
	}
	todos.push(todo);
	showUpdate(`Added ${content}`);
}

function remove(index) {
	showUpdate(`Removed ${todos[index].content}`);
	todos.splice(index, 1);
}

function complete(id) {
	todos[id].complete = true;
	showUpdate(`Completed ${todos[id].content}`);
}

add("Go to the market");
add("Prepare dinner");

complete(0);

add("Call Meka");

remove(1);

add()
