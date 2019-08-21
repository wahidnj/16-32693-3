
<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
</head>
<body>

	<h2>Delete User</h2>

	<a href="{{route('home.userlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Id :</td>
			<td>{{$user['id']}}</td>
		</tr>
		<tr>
			<td>Employee Name :</td>
			<td>{{$user['email']}}</td>
		</tr>
		<tr>
			<td>Company Name :</td>
			<td>{{$user['uname']}}</td>
		</tr>
		<tr>
			<td>Address :</td>
			<td>{{$user['address']}}</td>
		</tr>
		<tr>
			<td>Contact :</td>
			<td>{{$user['contact']}}</td>
		</tr>
		<tr>
			<td>User Type :</td>
			<td>{{$user['type']}}</td>
		</tr>
		
		
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>