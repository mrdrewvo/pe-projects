function toDoneApp(name) {

	this.name = name;
	this.tasks = [];
	this.idNumStart = 0;

	this.showUpdate = function(message) {
		console.log(message);
		console.log("My Tasks: ", this.tasks);
	},

	this.add = function(task) {
		this.tasks.push({
			id: `task-${++this.idNumStart}`,
			content: task,
			status: `new`,
			date: Date.now()
		});
		this.showUpdate(`Added ${task}`);
	},

	this.remove = function(id) {
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

	this.update = function(id, key, content) {
		// identify task for updating
		const found = this.tasks.find(function(task) {
			return task.id == id;
		});
		const index = this.tasks.indexOf(found);
		
		// declare what property I want updated and to what and make the update
		this.tasks[index][key] = content;

		// print the update
		this.showUpdate(`Updated ${key} for Task #${id} to ${content}`);
	}
}

const trial1 = new toDoneApp('disney trip');

trial1.add('decide dates');

trial1.add('book resort reservation');

trial1.add('reserve theme park ticket dates');

trial1.remove('5');

trial1.remove('task-2');









