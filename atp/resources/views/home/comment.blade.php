
<!DOCTYPE html>
<html>
<head>
	<title>Review Page</title>
</head>
<body>

	<h2>Comment Here</h2>

	

   <form method="post">
	@csrf
	<table border="0">

		<tr>
			<td>Restuarant Name</td>
			<td>{{$restuarant['rname']}}</td>
		</tr>
	
		
		<tr>
			<td>Comment Here</td>
			<td><input type="text" name="comment"></td>
		</tr>
	
		
		
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>