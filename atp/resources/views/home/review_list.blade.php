<!DOCTYPE html>
<html>
<head>
	<title>Food Reviews</title>
</head>
<body>

	<h2>Food Reviews:</h2>
	
	

	<table border="1">
		<tr>
			<td>Serial No</td>
			<td>User Name</td>
			<td>Restuarant Name</td>
			<td>Comment</td>
			<td>Action</td>

		</tr>
		@foreach($review as $value)
		<tr>
			<td>{{$value['serialno']}}</td>
			<td>{{$value['uname']}}</td>
			<td>{{$value['rname']}}</td>
			<td>{{$value['comment']}}</td>
			<
			<td>
				
				<a href="{{route('home.delete_review', $value['serialno'])}}">Delete</a> 
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>