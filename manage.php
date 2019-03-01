<?php
include("warehouse.php") ;
$myobject= new warehouse();
if(isset($_POST['submit']))
{
$name = $_POST["name"];
$location = $_POST["location"];
$myobject->insert($name,$location);

header( 'Location:warehousehome.php' );			
}

if(isset($_POST['manage']))
{
		

$myobject->show();

}



if(isset($_GET['id']))
{
	$id=$_GET['id'];
	
	$myobject->delete($id);
	header( 'Location: warehousehome.php' ) ;




}




?>