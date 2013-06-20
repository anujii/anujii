epta.service('TaskProvider', function($resource) {
    var Task = $resource(
        "/tasks/:id",
        {id: "@id" },
        { "update": {method:"PUT"} }
    );

    var tasks = [];

    this.update = function() {
        tasks = Task.query();
    };
    this.update();

    this.getTasks = function() {
        return tasks;
    };
    this.newTask = function(params) {
        return new Task(params);
    };

    this.getTask = function(id) {
        return Task.get({id:id});
    };

    this.createTask = function(newTask) {
        newTask.$save();
        tasks.push(newTask);
    };
    this.updateTask = function(task) {
        task.$update();
        var i = _.pluck(tasks, 'id').indexOf(task.id);
        tasks[i] = task;
    };
    this.deleteTask = function (task) {
        task.$delete();
        tasks = _.without(tasks, task);
    };
});
