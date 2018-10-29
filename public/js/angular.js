var app = angular.module('myApp',[])
	.constant('API_URL','http://localhost:8000/');
app.controller('myController', function($scope, $http, API_URL){

	// $http.get(API_URL + "get_todo_list").then(successCallback, errorCallback);
	
	// function successCallback(response){
 //    //success code
 //    // $scope.brands = '';

	//     angular.forEach(response.data,function(value,index){
	//        // $scope.brands = value;
	//        console.log('todo-list', value);
	//     });
	// }
	// function errorCallback(error){
 //    //error code
 //    console.log('error', error);
	// }

	// $scope.addTodo = function () {
	// 	var name = document.getElementById('todo_input').value;
	// 	var data = { name: name, _token: '{{csrf_token()}}' };
	// 	$http.post(API_URL + "save_todo", data).then(successCallback, errorCallback);
		
	// 	function successCallback(response){

	// 	    // angular.forEach(response.data,function(value,index){
	// 	    //    // $scope.brands = value;
	// 	    //    console.log('todo-list', value);
	// 	    // });
	// 	    console.log('save_todo response', response);
	// 	}
	// 	function errorCallback(error){
	// 	    //error code
	// 	    console.log('error', error);
	// 	}
	// }
});