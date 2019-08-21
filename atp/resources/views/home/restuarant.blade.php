<!DOCTYPE html>
<html>
<head>
	<title>Restuarant List</title>
</head>
<body>

	<h2>Restuarant List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>Restuarant ID</td>
			<td>Restuarant Name</td>
			<td>Location</td>
			<td>area</td>
			<td>Goals</td>
			
			<td>Action</td>

		</tr>
		@foreach($restuarant as $value)
		<tr>
			<td>{{$value['rid']}}</td>
	
			<td>{{$value['rname']}}</td>
			<td>{{$value['location']}}</td>
			<td>{{$value['area']}}</td>
			<td>{{$value['goals']}}</td>
			<td>
				<a href="{{route('home.edit_restuarant', $value['rid'])}}">Edit</a> |
				<a href="{{route('home.delete_restuarant', $value['rid'])}}">Delete</a> 
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>