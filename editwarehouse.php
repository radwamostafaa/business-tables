


<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
// Create connection
$connn = new mysqli($servername, $username, $password,$db);

  $id = $_GET['id'];
$sql = "SELECT * FROM warehouse where id='$id'";

$result = mysqli_query($connn,$sql);

while($row = mysqli_fetch_array($result))
{
	$name=$row['name'];
	$location=$row['location'];
}
	

	if(isset($_POST['submit']))
	{

	$id=$_POST['id'];
		
	$name=$_POST['name'];	
$location=$_POST['location'];
include("warehouse.php") ;
$myobject= new warehouse();
$myobject->update($name,$location,$id);
header( 'Location: warehousehome.php' );

	}


?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="forms.css"">
	<title></title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Edit <b>Product</b></h2>
					</div>
					
                </div>
            </div>
            <form action="" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" required value="<?php echo $name; ?>">
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" name="location" required value="<?php echo $location;?>">
    <input type="hidden" name="id"   value="<?php echo $id;?>">

  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        </div>
    </div>
</body>
</html>
