app.factory('Contact', function($http){
            
            
            return {
                
                get: function(){
                    return $http.get('/contacts/');
                },
                
                save: function(contactData){
                    return $http({
                        
                        method: 'POST',
                        url: '/contacts',
                        headers:{'Contant-type' : 'application/x-www-form-urlencoded'},
                        data:$.param(contactData)
                    });
                },
                
                destory:function($id){
                    return $http.delete("/api/contacts/" + id);
                }
            }
        });