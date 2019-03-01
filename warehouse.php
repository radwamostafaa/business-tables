<?php
  /**
*  
 	*/
class warehouse 
{
	


function insert($name,$location)
	{
		$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
// Create connection
$connn = new mysqli($servername, $username, $password,$db);
$sql = "INSERT INTO warehouse(name,location)
VALUES('$name','$location')";	 
$query = mysqli_query($connn, $sql); 

		

	}



function show()
{
	$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
// Create connection
$connn = new mysqli($servername, $username, $password,$db);
	$sql = "SELECT * FROM warehouse";
$result = $connn->query($sql);  

if ($result->num_rows > 0) 
{ 
  	 		
    while($row = $result->fetch_assoc())
     {
  echo "<tr>";
  echo "<td>". $row['name'] ."</td>";
  echo "<td>". $row['location'] ."</td>";		
  echo "<td><a class=edit data-toggle=modal href=editwarehouse.php?id=".$row['id']."><i class=material-icons data-toggle=tooltip title=Edit>&#xE254;</i></a></td>";  
  echo "<td><a class=delete data-toggle=modal href=manage.php?id=" . $row['id'] . "><i class=material-icons data-toggle=tooltip title=Delete>&#xE872;</i></a></td>";  
}
}
 else
 {
    echo "0 results";
}
}


function update($name,$location,$id)
{

$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
// Create connection
$connn = new mysqli($servername, $username, $password,$db);
$sql = "UPDATE warehouse SET name='$name' ,location='$location' WHERE id=$id";

mysqli_query($connn, $sql);

if ($connn->query($sql) === TRUE)
 {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connn->error;

}


}
function delete($id)
{
$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
// Create connection
$connn = new mysqli($servername, $username, $password,$db);

$sql = "DELETE FROM warehouse WHERE id='$id'";
if ($connn->query($sql) === TRUE)
 {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connn->error;

}
}	

}




  ?>