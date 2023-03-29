const toDoneApp = {

	tasks: [],
	idNumStart: 0,

	showUpdate: function(message) {
		console.log(message);
		console.log("My Tasks: ", this.tasks);
	},

	add: function(task) {
		this.tasks.push({
			id: `task-${++this.idNumStart}`,
			content: task,
			status: `new`,
			date: Date.now()
		});
		this.showUpdate(`Added ${task}`);
	},

	remove: function(id) {
		const found = this.tasks.find(function(task){
			return task.id == id;
		});

		if(found) {
			const index = this.tasks.indexOf(found);
			this.tasks.splice(index, 1);
			this.showUpdate(`Removed "${found.content}"`);
		} else {
			console.log(`${id} not found! boo!`);
		}
	},

	update: function(id, key, content) {
		// identify task for updating
		const found = this.tasks.find(function(task){
			return task.id == id;
		});
		const index = this.tasks.indexOf(found);
		
		// declare what property I want updated and to what and make the update
		this.tasks[index][key] = content;

		// print the update
		this.showUpdate(`Updated ${key} for Task #${id} to ${content}`);
	},
}


toDoneApp.add('Take out the trash');

toDoneApp.add('Call Kirsten about refinancing');

toDoneApp.remove('task-2');

toDoneApp.remove('task-5');

toDoneApp.add('Get car washed');

toDoneApp.update('task-3', 'status', 'in progress');









