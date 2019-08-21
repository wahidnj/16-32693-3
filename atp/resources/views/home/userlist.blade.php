<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>User ID</td>
			<td>Email</td>
			<td>User Name</td>
			<td>Password</td>
			<td>Contact</td>
			<td>Address</td>
			<td>Action</td>

		</tr>
		@foreach($user as $value)
		<tr>
			<td>{{$value['uid']}}</td>
			<td>{{$value['email']}}</td>
			<td>{{$value['uname']}}</td>
			<td>{{$value['password']}}</td>
			<td>{{$value['contact']}}</td>
			<td>{{$value['address']}}</td>
			<td>
				<a href="{{route('home.edit', $value['uid'])}}">Edit</a> |
				<a href="{{route('home.delete', $value['uid'])}}">Delete</a> 
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>