function showUpdate() {
	console.log('My Todos:', todos);
}

const todos = [];

function add(todo) {
	todos.push(todo);
	showUpdate();
}

function remove(id) {
	todos.splice(id, 1);
	showUpdate();
}

add("Go to the market");
add("Prepare dinner");
add("Call Meka");

remove(2);