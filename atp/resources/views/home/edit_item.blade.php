
<!DOCTYPE html>
<html>
<head>
	<title>Edit Item</title>
</head>
<body>

	<h2>Edit Item</h2>

	<a href="{{route('home.itemlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Item Id</td>
			<td>{{$menus['mid']}}</td>
		</tr>
		<tr>
			<td>Restuarant Name</td>
			<td><input type="text" name="rname" value="{{$menus['rname']}}"></td>
		</tr>
		<tr>
			<td>Item Name</td>
			<td><input type="text" name="mname" value="{{$menus['mname']}}"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{$menus['price']}}"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="details" value="{{$menus['details']}}"></td>
		</tr>
		
		
		
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>