<!doctype html>
<html ng-app="todoApp">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.2/angular.min.js"></script>
    <script src="app.js"></script>
    
    
    <link rel="stylesheet" href="todo.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  
  
  <body class='container'>

  	<center>  	
  		<br>	
	    <h2>당신을 위한 검색 결과</h2>
	    <div ng-controller="TodoListController as todoList">
	    	<br>
	    	<h4> Total <b>  rent information</b> around your location </h4>
	    	<br>
	    	{{houses}}
	    	<br>
	    	{{hous}}

	    </div>  
  	</center>

    <div ng-controller="TodoListController as todoList"> 
		<br><br>

			<div class="row">
			  <div class="col-sm-6 col-md-4" ng-repeat="todo in houses | orderBy:'rent'" style="height: 500px;">
			    <div class="thumbnail">
			      <img src="{{todo.pictures}}" style="max-height: 230px;">
			      <div class="caption"> 
			        <h4> Rent: ${{todo.rent}} / Deposit: ${{todo.deposit}} </h4>  
			        <h4> Bed: {{todo.room}} / Bath: {{todo.bath}} </h4>    
			        {{todo.name}}  
			        <br><br>
			        <img src="fivestarss.png" alt="" width="170px">
			        <br><br>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div>
			</div> 
 
      <form ng-submit="todoList.addTodo()">
        <input type="text" ng-model="todoList.todoText"  size="30" placeholder="add new todo here">
        <input class="btn btn-info" type="submit" value="add">
      </form>
    </div>
  </body>
</html>