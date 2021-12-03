
<html>
<h1>SEARCHED RESTAURANT</h1>
<br>
</html>
<?php

require_once '../model/model.php';

if (isset($_POST['findResturant'])) {
	
		echo $_POST['resturant_name'];


    try {
    	
    	$allSearchedResturants = searchResturant($_POST['resturant_name']);
    	require_once '../showSearchedResturant.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

?>
<html>
	<br>
<p><a href="../searchResturant.php"> Back page</a></p>  