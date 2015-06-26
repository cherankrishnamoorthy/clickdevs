app.controller('mainCtrl',function($scope,$http,Contact,$location,$routeParams){
    
    $scope.appName =  'PhoneBook';
    $scope.developer = '@cherankrish';
    $scope.deleteIcon = "/img/basic-icon-trash.png";
    
    
    $scope.add =  function(id){
        
       $http.get("/contacts/create").success(function(data){
           
       });
    };
    
    $scope.edit= function(){
        
     $scope.go("/contacts/edit/"+$routeParams.id);
    };
    
    $scope.go = function ( path ) {
        $location.path( path );
    };
    $scope.deleteContact = function($index){
       
        var res = $http.delete('/contacts/'+$index);
       
        
    };
    
    Contact.get()
        .success(function(data) {
            $scope.contacts = data;
           
        });
        
        
});

app.directive('deleteRecord',function(){
    
    return{
        controller: 'mainCtrl',
        restrict: 'E',
        scope:{ info: "="},
        template:"<div class='deleteIcon' title='Delete Record' ng-click='deleteContact(info.id)'  ><img src='/img/basic-icon-trash.png' alt='Delete Contact' /></div>",
        replace:true,
        link:function(scope,element,attrs){
            element.bind('click', function () {
                element.html("<img src='/img/basic-icon-trash-deleted.png' alt='Delete Contact' />");
            });
             
        }
        
    };
    
});

