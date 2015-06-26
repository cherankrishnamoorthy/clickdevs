app.factory('Contact', function($http){
            
            
            return {
                
                get: function(){
                    return $http.get('/contacts/');
                },
                
                getOne: function(id){
                    return $http.get('/contacts/'+id);
                },
                
                getOneForEdit: function(id){
                    return $http.get('/contacts/'+id);
                },
                save: function(contactData,id){
                  
                     return $http({
                        
                        method: 'PATCH',
                        url: '/contacts/'+id,
                        headers:{'Contant-type' : 'application/x-www-form-urlencoded'},
                        data:contactData
                    });
                },
                
                destory:function($id){
                    return $http.delete("/api/contacts/" + id);
                }
            }
        });