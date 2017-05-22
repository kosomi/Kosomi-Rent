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
    <div ng-controller="TodoListController as todoList">

	  	<center>  	
	  		<br>	
		    <h2>당신을 위한 검색 결과</h2>       
		    <div ng-controller="TodoListController as todoList">
		    	<br>
		    	<h4> Total <b> {{todoList.todos.length}} rent information</b> around your location 
		    	[ <a href="" ng-click="todoList.archive()">archive</a> ]</h4> 
		    </div>  
		    <br>  
		    <b> 호돌이분식 </b> CurLat: {{CurLat}} , CurLng: {{CurLng}} 
	  	</center>  
 
		<p>
			<h2>Sort by Rent:</h2>
			<button ng-click="orderByMe('rent')" class="btn btn-warning"> Cheapper </button>
			<button ng-click="orderByMe('-rent')" class="btn btn-warning"> Expensive </button>
			<button ng-click="orderByMe('sqf')" class="btn btn-info"> Smaller Sqf </button>
			<button ng-click="orderByMe('-sqf')" class="btn btn-info"> Bigger Sqf </button> 
			<button ng-click="sortBy('-rent')" class="btn btn-danger"> Rent </button> 
			<button ng-click="sortBy('-sqf')" class="btn btn-danger"> Room </button> 
			<button ng-click="sortBy('-dist')" class="btn btn-danger"> Distance </button> 
		</p>

		<br> 

		<h2>
			<center>
				Search: <input ng-model="searchText"> 
				<br><br>
				Range <small>Rent: ${{slow | currency:"":0}} ~ ${{shigh | currency:"":0}}</small> | <small>Room: {{sroom}}</small>
				<br><br> 
				  Model as range: <input type="range" name="range" ng-model="shigh" min="{{slow}}"  max="3000">
				  <hr>
				  Model as number: <input type="number" ng-model="slow"><br>
				  Min: <input type="number" ng-model="slow"><br>
				  Max: <input type="number" ng-model="shigh"><br>
				  value = <code>{{shigh}}</code><br/>
			</center>
		</h2> 

		<br>
		<div range-slider min="0" max="100" model-min="min" model-max="max"></div>
		<br>
 
		<p>
			<button ng-click="putLocation('Los Angeles')" class="btn btn-success">		Los Angeles </button>
			<button ng-click="putLocation('Lancaster')" class="btn btn-success">		Lancaster </button>
			<button ng-click="putLocation('Anaheim')" class="btn btn-success">			Anaheim </button>
			<button ng-click="putLocation('Glendale')" class="btn btn-success">			Glendale </button>
			<button ng-click="putLocation('La Palma')" class="btn btn-success">			La Palma </button>
			<button ng-click="putLocation('Inglewood')" class="btn btn-success">		Inglewood </button>
			<button ng-click="putLocation('Camarillo')" class="btn btn-success">		Camarillo </button>
		</p>
		<p>
			<button ng-click="putLocation('Van Nuys')" class="btn btn-success">		 	Van Nuys </button> 
			<button ng-click="putLocation('West Covina')" class="btn btn-success">		West Covina </button>
			<button ng-click="putLocation('Woodland Hills')" class="btn btn-success">	Woodland Hills </button>
			<button ng-click="putLocation('Redondo Beach')" class="btn btn-success">	Redondo Beach </button>
			<button ng-click="putLocation('Torrance')" class="btn btn-success">			Torrance </button>
			<button ng-click="putLocation('Rowland Heights')" class="btn btn-success">	Rowland Heights	 </button>
			<button ng-click="putLocation('Long Beach')" class="btn btn-success">		Long Beach </button>  
		</p>
 
		<br><br>

		<div class="row">
		  <div class="col-sm-6 col-md-4" ng-repeat="todo in todoList.todos | orderBy:propertyName:reverse | filter:searchText" style="height: 510px;">
		    <div class="thumbnail">  
				<img src="{{todo.pictures}}" style="height: 200px; width: 340px"> 

				<div> 
					<h4> Rent: {{todo.rent | currency:"$":0}} <b ng-show='{{todo.deposit}} '> / Deposit: {{todo.deposit | currency:"$":0}}</b> </h4>  
					<h4> 
						Bed: {{todo.room}} / Bath: {{todo.bath}} <b ng-show='{{todo.sqf}} '> / SqFt: {{todo.sqf | currency:"":0}} ft</b>
					</h4>    
					<h5 style="color:gray;">{{todo.name}}</h5>   
					<b>{{todo.dist}} mi</b> away from your location.
					<br><br>
					<div>
					<img src="fivestarss.png" alt="" width="170px"> 
					</div>
					<br> 
					<p>
						<a href="#" class="btn btn-primary" role="button">Button</a> 
						<a href="#" class="btn btn-default" role="button">Button</a>
						<a href="#" class="btn btn-warning" role="button"> Call </a>
						<a href="#" class="btn btn-info" 	role="button"> Drive </a>
					</p>
				</div>

		    </div>
		  </div>
		</div>   

    </div>
  </body>
</html> 