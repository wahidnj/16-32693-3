<!DOCTYPE html>
<html>
<head>
	<title>Add Restuarant</title>
</head>
<body>

	<h2>Add Restuarant</h2>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Restuarant Name</td>
			<td><input type="text" name="rname"></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type="text" name="location"></td>
		</tr>
		<tr>
			<td>Area</td>
			<td><input type="text" name="area"></td>
		</tr>
		<tr>
			<td>Goals</td>
			<td><input type="text" name="goals"></td>
		</tr>
		
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>

@foreach ($errors->all() as $error)
    {{ $error }} <br>
@endforeach 


</body>
</html>