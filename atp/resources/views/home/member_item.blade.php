<!DOCTYPE html>
<html>
<head>
	<title>Item List</title>
</head>
<body>

	<h2>Restuarant Items:</h2>
	

	<table border="1">
		<tr>
			<td>Item ID</td>
			<td>Restuarant Name</td>
			<td>Item Name</td>
			<td>Price</td>
			<td>Description</td>
			
			

		</tr>
		@foreach($menus as $value)
		<tr>
			<td>{{$value['mid']}}</td>
	
			<td>{{$value['rname']}}</td>
			<td>{{$value['mname']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['details']}}</td>
			
		</tr>
		@endforeach

</table>

</body>
</html>