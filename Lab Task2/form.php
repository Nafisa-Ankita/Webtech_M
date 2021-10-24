<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.err{
			color: red;
		}
	</style>
</head>

<?php

// define variables and set to empty values
$nameErr = $emailErr = $dobErr= $genderErr = $degreeErr = $bgErr= "";
$name = $email = $dob= $gender = $degree = $bg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if(empty($_POST["dob"]))
  {$dobErr="Date of Birth is required";}
  else{$dob=test_input($_POST["dob"]);}


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if(empty($_POST["degree"]))
  {$degreeErr="Itis required";}
  else
  {$degree=test_input($_POST["degree"]);
    if(count($_POST["degree"])<2)
    {$degreeErr="Atleast 2 Degree must be selected!";}
  }

  if(empty($_POST["bg"]))
  {$bgErr="Blood group is required";}
  else{$bg=test_input($_POST["bg"]);}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

	 <fieldset>
         <legend>
             <label for="name"> <strong> NAME </strong></label>
         </legend>    
             <input type="text" id="name" name="name">
	 	<span class="err">*
	 		<?php echo $nameErr;?>
	 	</span>
     </fieldset><br>

	<fieldset>
        <legend>
            <label for="email"> <strong>EMAIL </strong></label>
        </legend>
        <input type="text" id="email" name="email">
		<span class="err">*
	 		<?php echo $emailErr;?>
	 	</span>
    </fieldset><br>

    <fieldset>
        <legend>
            <label for="dob"> <strong> DATE OF BIRTH</strong>
        </legend>
        <input type="date" id="dob" name="dob">
        <span class="err">* <?php echo $dobErr;?> </span>
    </fieldset><br>
	 	
	<fieldset>
        <legend>
            <label for="gender"> <strong>GENDER</strong></label>
        </legend>
        <input type="radio" name="gender" id="gender" value="female">Female
		<input type="radio" name="gender" id="gender" value="male">Male
		<input type="radio" name="gender" id="gender" value="other">Other
		<span class="err">*
	 		<?php echo $genderErr;?>
	 	</span>
    </fieldset><br>

    <fieldset>
        <legend>
            <label for="degree"><strong> DEGREE </strong> </degree>
        </legend>
        <input type="checkbox" name="degree" id="degree" value="SSC"> SSC
        <input type="checkbox" name="degree" id="degree" value="HSC"> HSC
        <input type="checkbox" name="degree" id="degree" value="BSc"> MSc
        <input type="checkbox" name="degree" id="degree" value="MSc"> MSc
    </fieldset><br>

    <fieldset>
        <legend>
            <label for="bg"> <strong>BLOOD GROUP </strong> </label>
        </legend>
        <select name="bg" id="bg">
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
    </fieldset>
	 	<input type="submit" value="Submit">
	 </form>

	 <?php 

	 	echo "<h1>Your input</h1>";
	 	echo $name . "<br>";
	 	echo $email . "<br>";
	 	echo $dob . "<br>";
	 	echo $gender . "<br>";
	 	echo $degree. "<br>"; 
        echo $bg;

	  ?>
</body>

	 
</html>