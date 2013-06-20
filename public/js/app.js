var anujii = angular.module('anujii', ['ngResource']);

anujii.config(function($routeProvider, $locationProvider) {
    $routeProvider
        .when('/', {controller: 'IndexCtrl', templateUrl: '/partials/index.html'})
        .when('/edit/:id', {controller: 'EditCtrl', templateUrl: '/partials/edit.html'})
        .otherwise({redirectTo: '/'});
    $locationProvider.html5Mode(true);
});