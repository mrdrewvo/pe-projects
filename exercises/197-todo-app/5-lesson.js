var todos = [];
var archive = [];
var lastId = 0

// "$" can be used to denote it's an element, not a property
const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $output = document.querySelector('output');

function add(content) {
	todo = {
		id: `a-${lastId++}`,
		content,
		complete: false,
	}

	todos = [...todos, todo];
	renderTodos(todos);
}

function remove(id) {
	const filtered = todos.filter( function(todo) {
		return todo.id != id;
	});

	todos = [...filtered];
	renderTodos(todos);
}

function complete(id) {
	for (let i = 0; i < todos.length; i++) {
		if (todos[i].id == id) {
			todos[i].complete = true;
		}
	}
	renderTodos(todos);
}

//event handling
$form.addEventListener('submit', function(event) {
	event.preventDefault();

	add( $input.value );
	$input.value = "";
	console.log('todos: ', todos);
});

$output.addEventListener('click', function(event) {
	console.log(event.target);

	if (event.target.textContent == 'remove') {
		const id = event.target.closest('li').dataset.id;
		remove(id);
	}

	if (event.target.textContent == 'complete') {
		const id = event.target.closest('li').dataset.id;
		complete(id);
	}
});

//render a todo
function renderTodo(todo) {
	return `
		<li data-id='${todo.id}'>
			<todo-card class='${todo.complete ? "complete" : ""}'>
				<h2>${todo.content}</h2>

				<actions>
					<button>remove</button>
					<button>complete</button>
				</actions>
			</todo-card>
		</li>
	`;
}

function renderTodos(todos) {
	var template = "<ul>";
	
	todos.forEach( function(todo) {
		template +=renderTodo(todo);
	});
	
	template += "</ul>";
	
	$output.innerHTML = template;
}

add("do the dishes");













