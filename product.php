

<?php 



/**
* 
*/
class product
{

function __construct()
	{
		# code...

	}
	function insert($name,$price)
	{
		$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
// Create connection
$connn = new mysqli($servername, $username, $password,$db);
$sql = "INSERT INTO product(type,price)
VALUES('$name','$price')";	 
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
	$sql = "SELECT * FROM product";
$result = $connn->query($sql);  

if ($result->num_rows > 0) 
{ 
  	 		
    while($row = $result->fetch_assoc())
     {
  echo "<tr>";
  echo "<td>". $row['type'] ."</td>";
  echo "<td>". $row['price'] ."</td>";		
  echo "<td><a class=edit data-toggle=modal href=editproduct.php?id=".$row['id']."><i class=material-icons data-toggle=tooltip title=Edit>&#xE254;</i></a></td>";  
  echo "<td><a class=delete data-toggle=modal href=manage.php?id=" . $row['id'] . "><i class=material-icons data-toggle=tooltip title=Delete>&#xE872;</i></a></td>";  
}
}
 else
 {
    echo "0 results";
}
}


function update($name,$price,$id)
{
$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
// Create connection
$connn = new mysqli($servername, $username, $password,$db);
$sql = "UPDATE product SET type='$name' ,price='$price' WHERE id=$id";

mysqli_query($connn, $sql);



}
function delete($id)
{
$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
// Create connection
$connn = new mysqli($servername, $username, $password,$db);

$sql = "DELETE FROM product WHERE id='$id'";
if ($connn->query($sql) === TRUE)
 {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connn->error;

}
}	
	
}


?>
		