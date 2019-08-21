<!DOCTYPE html>
<html>
<head>
	<title>Food Review</title>
</head>
<body>

	<h2>Item List:</h2>
	

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
				<a href="{{route('home.comment', $value['rname'])}}">Comment Here</a> 
			</td>
		</tr>
		@endforeach

</table>


<h2>Restuarant List:</h2>
	

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
				<a href="{{route('home.comment', $value['rname'])}}">Comment Here</a> 
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>