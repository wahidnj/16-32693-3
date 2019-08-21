<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('user')}}</h1> 

	
	
	<a href="{{route('home.add')}}">Add User</a> |
	<a href="{{route('home.userlist')}}">User List</a> |

	<a href="{{route('home.add_restuarant')}}"> Add Restuarant</a> |
	<a href="{{route('home.restuarantlist')}}"> Restuarant List</a> |
	<a href="{{route('home.add_item')}}"> Add Items</a> |
	<a href="{{route('home.itemlist')}}"> Items List</a> |
	<a href="{{route('home.review_list')}}"> Food Reviews</a> |
	<a href="{{route('home.food_review')}}"> Food Expertise</a> |
	<a href="/logout">logout</a>


</body>
</html