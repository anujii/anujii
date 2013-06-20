
epta.controller('IndexCtrl', function($scope, TaskProvider) {
    $scope.tasks = TaskProvider.getTasks();
    $scope.newTask = TaskProvider.newTask();

    $scope.createTask = function(newTask) {
        if(!newTask.subject) {
            return;
        }
        TaskProvider.createTask(newTask);
        $scope.newTask = TaskProvider.newTask();
    };
    $scope.deleteTask = function (task) {
        TaskProvider.deleteTask(task);
        $scope.tasks = TaskProvider.getTasks();//пришлось так сделать ибо не хочет сам обновлять
    };
});

epta.controller('EditCtrl', function($scope, $routeParams, $location, TaskProvider) {
    var id = $routeParams.id;
    $scope.task = TaskProvider.getTask(id);

    $scope.saveTask = function(task) {
        TaskProvider.updateTask(task);
        $location.path('/');
    }
});