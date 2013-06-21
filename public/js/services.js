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
        var i = tasks.push(newTask) - 1;
        newTask.$save(function(task) {
            tasks[i] = task;
        });
    };
    this.updateTask = function(task) {
        task.$update();
        var ids = _.pluck(tasks, 'id');
        var i = ids.indexOf(task.id);
        if(i == -1) {
            var id = angular.isString(task.id) ? parseInt(task.id) : task.id + '';
            i = ids.indexOf(id);
        }
        if(i == -1) {
            return;
        }
        tasks[i] = task;
    };
    this.deleteTask = function (task) {
        tasks = _.without(tasks, task);
        task.$delete();
    };
});
