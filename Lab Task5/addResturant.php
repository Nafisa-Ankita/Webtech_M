<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   
<h1>ADD RESTAURANT</h1>
<br>
 <form action="controller/createResturant.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="location">Location:</label><br>
  <input type="text" id="location" name="location"><br>
  <label for="contactNumber">ContactNumber:</label><br>
  <input type="tel" id="contactNumber" name="contactNumber"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <br>
  <input type="file" name="image"><br><br>
  <input type="checkbox" id="display" name="display">
  <label for="display">Display</label>
  <br>
  <br>
  <input type="submit" name = "createResturant" value="Create">
  <input type="reset"> 
  <br>

</form> 

</body>
</html>

