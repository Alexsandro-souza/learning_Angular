<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">

    <p>Today's welcome message is:</p>
    <h1>{{myWelcome}}</h1>

    </div>    





    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script>
        var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("welcome.html")
  .then(function(response) {
    $scope.myWelcome = response.data;
  });
}); 
    </script>
</body>
</html>