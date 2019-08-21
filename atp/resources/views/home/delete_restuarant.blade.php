
<!DOCTYPE html>
<html>
<head>
	<title>Delete Restuarant</title>
</head>
<body>

	<h2>Delete Restuarant</h2>

	<a href="{{route('home.restuarantlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Restuarant Id :</td>
			<td>{{$restuarant['rid']}}</td>
		</tr>
		<tr>
			<td>Restuarant Name :</td>
			<td>{{$restuarant['rname']}}</td>
		</tr>
		<tr>
			<td>Location :</td>
			<td>{{$restuarant['location']}}</td>
		</tr>
		<tr>
			<td>Area :</td>
			<td>{{$restuarant['area']}}</td>
		</tr>
		<tr>
			<td>Goals :</td>
			<td>{{$restuarant['goals']}}</td>
		</tr>
		
		
		
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>