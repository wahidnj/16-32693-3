
<!DOCTYPE html>
<html>
<head>
	<title>Search Employee</title>
</head>
<body>

	<h2>Search Employee</h2>

	<a href="{{route('home.userlist')}}">Back</a> |
	<a href="/logout">logout</a>


<form method="get" action="/home/search">
	@csrf
<!--  -->
					
			<!-- <input type="search" name="search" >
		
		
	         <button type="submit" name="search">Search</button> -->
		
</form>


	

	

</body>
</html>