<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title>Todo app</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/frontend.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body ng-controller="myController">
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">To-do</a>
    </div>
  </div>
</nav>
  <div class="container" style="margin-top: 5%;">
  <form method="post" name="add_todo_form" id="add_todo_form" style="display: flex;" action="/save_todo">
    {{ csrf_field() }}
    <input type="text" name="todo_input" id="todo_input" class="form-control" style="width: 25%;margin-right: 2px;">
    <button type="submit" class="btn btn-sm btn-default" ng-click="addTodo()">Add</button>
  </form>
    <h3>Todo list</h3>
      <ul style="list-style: none;margin-left: -3%;">
        @foreach($todos as $todo)
          <li style="padding: 5px;background-color: #f2f2f2;width: 25%;margin-top: 2px;font-size: 18px;border: 1px solid skyblue;">{{ $todo -> name }}</li>
        @endforeach
      </ul>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="{{asset('js/angular.js')}}"></script>
</html>