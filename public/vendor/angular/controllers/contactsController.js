app.controller('contactsCtrl',function($scope,$http,Contact,$routeParams,$location){
    
    $scope.appName =  'PhoneBook';
    $scope.developer = '@cherankrish';
    $scope.status = 'Save Contact';
    $scope.updatestatus = 'Save Contact';
    $scope.editId = "1";
    $scope.create =  function(Contact){
        
        $res =  $http({
                method: 'POST',
                  url: '/contacts',
                   headers:{'Contant-type' : 'application/x-www-form-urlencoded'},
                  data:Contact
                
        }).success(function(data){
           $scope.status = 'Contact Saved';
        }).error(function(){
            $scope.status = "Couldn't save";
        });
       
    };
    
    $scope.save=  function(ContactData){
       
        Contact.save(ContactData,$scope.editId).success(function(data){
            $scope.updatestatus = "Updated Success";
        
            
        }).error(function(){
            $scope.updatestatus = "Updated Failed";
            
        });
    };
    
    
    

        if($location.path() ==  "/home/"+$routeParams.id || $location.path() == "/contacts/edit/"+$routeParams.id){
        Contact.getOneForEdit($routeParams.id).success(function(data){
        
        $scope.editId = $routeParams.id;
        $scope.Contact = data;
       
         
       
    }).success(function(){
     
        
    }).error(function(){
         
    });
        
       }
        
});