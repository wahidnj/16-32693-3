<!DOCTYPE html>
<html>
<head>
	<title>Item List</title>
</head>
<body>

	<h2>Item List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>Item ID</td>
			<td>Restuarant Name</td>
			<td>Item Name</td>
			<td>Price</td>
			<td>Description</td>
			
			<td>Action</td>

		</tr>
		@foreach($menus as $value)
		<tr>
			<td>{{$value['mid']}}</td>
	
			<td>{{$value['rname']}}</td>
			<td>{{$value['mname']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['details']}}</td>
			<td>
				<a href="{{route('home.edit_restuarant', $value['mid'])}}">Edit</a> |
				<a href="{{route('home.delete_restuarant', $value['mid'])}}">Delete</a> 
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>