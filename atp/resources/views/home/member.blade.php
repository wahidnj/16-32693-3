<!DOCTYPE html>
<html>
<head>
  <title>Item List</title>
</head>
<body>


  <h1>Welcome Member</h1>

  <a href="{{route('home.search_restuarant')}}">Search Restuarants</a> |
  <a href="{{route('home.food_review')}}">Food Expertise</a> |
  <a href="/logout">logout</a>

  <h2>View Restuarants to see their food items</h2>

  <h3 align="center">Restuarant List</h3>
    
<table border="1" align="center">
    <tr>
      <td>Restuarant ID</td>
      <td>Restuarant Name</td>
      <td>Location</td>
      <td>Area</td>
      <td>Goals</td>
      
      <td>Menus</td>

    </tr>
    @foreach($restuarant as $value)
    <tr>
      <td>{{$value['rid']}}</td>
      <td>{{$value['rname']}}</td>
      <td>{{$value['location']}}</td>
      <td>{{$value['area']}}</td>
      <td>{{$value['goals']}}</td>
      
      <td>
        <a href="{{route('home.member_item', $value['rname'])}}">View Items</a> 
      </td>
    </tr>
    @endforeach

</table>
                
               
            
        
               

         
        </body>
</html>