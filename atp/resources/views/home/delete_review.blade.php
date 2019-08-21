
<!DOCTYPE html>
<html>
<head>
	<title>Delete Review</title>
</head>
<body>

	<h2>Delete Review</h2>

	

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Serial No :</td>
			<td>{{$review['serialno']}}</td>
		</tr>
		<tr>
			<td>Comments :</td>
			<td>{{$review['comment']}}</td>
		</tr>
		
		
		
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>