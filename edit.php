<?php
include('index.php');
$id = $_GET['id'];
$sql = "SELECT * FROM property where id='$id'";
$result = mysqli_query($connn,$sql);

while($row = mysqli_fetch_array($result))
{
	$image=$row['image'];
$type=$row['type'];
$location=$row['location'];
$nr=$row['numberofRooms'];
$nb=$row['numberofBeds'];
$salary=$row['price'];
$types=$row['status'];
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container">

<form action="applyedit.php" method="post" enctype="multipart/form-data">
  

<label for="image"><b>upload image:</b></label>
      <input type="file"  name="image" value="<?php echo $image;?>">
      <br>

<label for="type"><b>type:</b></label>
       <select class="types" name="type">
  <option class="type" value="apartement"  <?php if($type=="apartement") echo 'selected="selected"'; ?> >Apartement</option>
  <option class="type" value="studio" <?php if($type=="studio") echo 'selected="selected"'; ?>>Studio</option>
  <option class="type" value="villa" <?php if($type=="villa") echo 'selected="selected"'; ?> >Villa</option>
  <option class="type" value="townhouse" <?php if($type=="townhouse") echo 'selected="selected"'; ?> >Townhouse</option>
  <option class="type" value="land" <?php if($types=="land") echo 'selected="selected"'; ?> >Land</option>
  <option class="type" value="house" <?php if($type=="house") echo 'selected="selected"'; ?> >House</option>
</select>

<br>

<label for="location" ><b>location:</b></label>
<input type="text" name="location" value="<?php echo $location;?>">
<br>

<label for="nr"><b>number of rooms:</b></label>
<input type="number" name="nr" value="<?php echo $nr;?>">
	
<br>

<label for="nb"><b>number of beds:</b></label>
<input type="number" name="nb" value="<?php echo $nb;?>">

<br>

<label for="salary"><b>salary:</b></label>
<input type="number" name="salary" value="<?php echo $salary;?>">
<br>


<label for="types"><b>for</b></label><br>
<input type="radio" name="types" value="rent" > rent
<input type="radio" name="types" value="sale" > sale<br>  
<input type="hidden" name="id"   value="<?php echo $id;?>">
<input type="submit" name="submit">

</form>
</div>

</body>
</html>

