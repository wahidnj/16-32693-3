
<!DOCTYPE html>
<html>
<head>
	<title>Edit Restuarant</title>
</head>
<body>

	<h2>Edit Restuarant</h2>

	<a href="{{route('home.restuarantlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Restuarant Id</td>
			<td>{{$restuarant['rid']}}</td>
		</tr>
		<tr>
			<td>Restuarant Name</td>
			<td><input type="text" name="rname" value="{{$restuarant['rname']}}"></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type="text" name="location" value="{{$restuarant['location']}}"></td>
		</tr>
		<tr>
			<td>Area</td>
			<td><input type="text" name="area" value="{{$restuarant['area']}}"></td>
		</tr>
		<tr>
			<td>Goals</td>
			<td><input type="text" name="goals" value="{{$restuarant['goals']}}"></td>
		</tr>
		
		
		
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>