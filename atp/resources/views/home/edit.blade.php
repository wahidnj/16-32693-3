
<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>
</head>
<body>

	<h2>Edit Employee</h2>

	<a href="{{route('home.userlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>User Id</td>
			<td>{{$user['uid']}}</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="uname" value="{{$user['uname']}}"></td>
		</tr>
		<tr>
			<td>Eamil</td>
			<td><input type="text" name="email" value="{{$user['email']}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="{{$user['password']}}"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" value="{{$user['contact']}}"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" value="{{$user['address']}}"></td>
		</tr>
		
		
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>