<?php 

require_once 'controller/ResturantInfo.php';
$resturant = fetchResturant($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>EDIT RESTAURANT</h1>
<br>
 <form action="controller/updateResturant.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $resturant['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="location">Location:</label><br>
  <input value="<?php echo $resturant['Location'] ?>" type="text" id="location" name="location"><br>
  <label for="contactNumber">ContactNumber:</label><br>
  <input value="<?php echo $resturant['ContactNumber'] ?>" type="text" id="contactNumber" name="contactNumber"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateResturant" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

