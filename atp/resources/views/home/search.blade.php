
<!DOCTYPE html>
<html>
<head>
	<title>Search Details</title>
</head>
<body>

	<h2>Search Details</h2>

	<a href="{{route('home.emplist')}}">Back</a> |
	<a href="/logout">logout</a>

<table border="0">
		<tr>
			<td>Employee Id :</td>
			<td>{{$emp['id']}}</td>
		</tr>
		<tr>
			<td> Employee Name:</td>
			<td>{{$emp['ename']}}</td>
		</tr>
		<tr>
			<td>Company Namw :</td>
			<td>{{$emp['cname']}}</td>
		</tr>
		<tr>
			<td>Contact :</td>
			<td>{{$emp['contact']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>
				{{$emp['uname']}}
			</td>
		</tr>
</table>
</body>
</html>