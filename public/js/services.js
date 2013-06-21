anujii.service('TaskProvider', function($resource) {
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
        tasks.push(newTask);
        newTask.$save();
    };
    this.updateTask = function(task) {
        var i = _.pluck(tasks, 'id').indexOf(task.id);
        tasks[i] = task;
        task.$update();
    };
    this.deleteTask = function (task) {
        tasks = _.without(tasks, task);
        task.$delete();
    };
});
