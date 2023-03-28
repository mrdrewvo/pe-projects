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

function remove(taskIdNum) {
	var index = taskIdNum - 1;
	print(`Removed ${tasks[index].content}`);
	tasks.splice(index, 1);
}

function update(taskIdNum, key, content) {
	var index = taskIdNum - 1;
	print(`Updated ${key} for Task #${taskIdNum} to ${content}`);
	tasks[index].key = content;
}

add('Take out the trash');
add('Call Kirsten about refinancing');

remove(2);

add('Get car washed');

update(3, `status`, `in progress`);