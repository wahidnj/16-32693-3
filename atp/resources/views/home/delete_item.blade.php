
<!DOCTYPE html>
<html>
<head>
	<title>Delete Item</title>
</head>
<body>

	<h2>Delete Item</h2>

	<a href="{{route('home.itemlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Item Id :</td>
			<td>{{$menus['mid']}}</td>
		</tr>
		<tr>
			<td>Restuarant Name :</td>
			<td>{{$menus['rname']}}</td>
		</tr>
		<tr>
			<td>Item Name :</td>
			<td>{{$menus['mname']}}</td>
		</tr>
		<tr>
			<td>Price :</td>
			<td>{{$menus['price']}}</td>
		</tr>
		<tr>
			<td>Description :</td>
			<td>{{$menus['details']}}</td>
		</tr>
		
		
		
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>