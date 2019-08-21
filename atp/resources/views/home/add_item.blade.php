<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
</head>
<body>

	<h2>Add Item</h2>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Restuarant Name</td>
			<td><input type="text" name="rname"></td>
		</tr>
		<tr>
			<td>Item Name</td>
			<td><input type="text" name="mname"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="details"></td>
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