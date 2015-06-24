<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

       
        {!! Html::style('http://fonts.googleapis.com/css?family=Lato:400') !!}
        {!! Html::style('/vendor/twbs/bootstrap/dist/css/bootstrap.min.css') !!}
        {!! Html::style('/css/custom.css') !!}
        
       

    </head>
    <body>
        <div class="container" ng-app="phoneBook" ng-controller="mainCtrl">
            
        @yield('content')
        
        
        @yield('footer')
        </div>
       {!! Html::script('/vendor/twbs/bootstrap/dist/js/bootstrap.min.js') !!}
       {!! Html::script('/vendor/angular/angular.min.js') !!}
       
       {!! Html::script('/vendor/angular/phonebook.app.js') !!}
       {!! Html::script('/vendor/angular/services/contactService.js') !!}
       {!! Html::script('/vendor/angular/controllers/mainController.js') !!}
       
    </body>
</html>
