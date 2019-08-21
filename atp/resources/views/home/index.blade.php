<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('user')}}</h1> 

	
	
	<a href="{{route('home.add')}}">Add User</a> |
	<a href="{{route('home.userlist')}}">User List</a> |

	<a href="{{route('home.add_restuarant')}}">Add Restuarant</a> |
	<a href="{{route('home.restuarantlist')}}"> Restuarant List</a> |
	<a href="/logout">logout</a>


</body>
</htmlss