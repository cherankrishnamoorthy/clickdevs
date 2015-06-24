app.controller('mainCtrl',function($scope,$http,Contact){
    
    $scope.appName =  'PhoneBook';
    $scope.developer = '@cherankrish';
    $scope.add =  function(id){
        
        alert(id);
    };
    
    $scope.edit =  function(id){
        
        alert(id);
    };
    
    Contact.get()
        .success(function(data) {
            $scope.contacts = data;
           
        }); 
        
        
});