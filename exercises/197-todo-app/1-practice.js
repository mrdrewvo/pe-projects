const tasks = [];
var count = 0;

function print(message) {
	console.log(message);
	console.log("My Tasks: ", tasks);
}

function add(task) {
	tasks.push({
		id: `task-${++count}`,
		content: task,
		status: `new`,
		date: Date.now()
	});
	print(`Added ${task}`);
}

function remove(id) {
	const found = tasks.find(function(task){
		return task.id == id;
	});

	if(found) {

		const index = tasks.indexOf(found);

		tasks.splice(index, 1);

		print(`Removed "${found.content}"`);
	} else {
		console.log(`${id} not found! boo!`);
	}
}

function update(id, key, content) {
	// identify task for updating
	const found = tasks.find(function(task){
		return task.id == id;
	});

	const index = tasks.indexOf(found);
	
	// declare what property I want updated and to what and make the update
	tasks[index][key] = content;

	// print the update
	print(`Updated ${key} for Task #${id} to ${content}`);
}

add('Take out the trash');

add('Call Kirsten about refinancing');

remove('task-2');

remove('task-5');

add('Get car washed');

update('task-3', 'status', 'in progress');









