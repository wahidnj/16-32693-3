
<!DOCTYPE html>
<html>
<head>
	<title>Search Restuarant</title>
</head>
<body>

	<h2>Search Restuarant</h2>

	
	<a href="/logout">logout</a>



<!--  -->
					
			      <form method="post">
                    @csrf
                    Restuarant Name:<input type="text" name="rname" /> &nbsp &nbsp

                  
 
                  </form>


                  <table border="0">
		<tr>
			<td>Restuarant Id :</td>
			<td>{{$restuarant['rid']}}</td>
		</tr>
		<tr>
			<td> Restuarant Name:</td>
			<td>{{$restuarant['rname']}}</td>
		</tr>
		<tr>
			<td>Location:</td>
			<td>{{$restuarant['location']}}</td>
		</tr>
		<tr>
			<td>Area :</td>
			<td>{{$restuarant['area']}}</td>
		</tr>
		<tr>
			<td>Goals :</td>
			<td>
				{{$restuarant['goals']}}
			</td>
		</tr>
                </table>
		

	

</body>
</html>