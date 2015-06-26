
var app = angular.module('phoneBook', ['ngRoute'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    
    app.filter('capitalize', function() {
  return function(input, scope) {
    if (input!=null)
    input = input.toLowerCase();
    return input.substring(0,1).toUpperCase()+input.substring(1);
  };
});


app.config(function ($routeProvider) {
  $routeProvider
    .when('/home/:id', {
      controller: 'contactsCtrl',
      templateUrl: '/vendor/angular/views/contact.html'
    })
    .when('/contacts/create', {
      controller: 'contactsCtrl',
      templateUrl: '/vendor/angular/views/create.html'
      
    }).when('/contacts/list', {
      controller: 'contactsCtrl',
      templateUrl: '/vendor/angular/views/contact.html'
      
    })
      .when('/contacts/edit/:id', {
      controller: 'contactsCtrl',
      templateUrl: '/vendor/angular/views/edit.html'
      
    })
    .otherwise({
      redirectTo: '/'
    });
});