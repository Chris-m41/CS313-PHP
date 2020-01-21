<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<?php include ("week03Header.php");?>
<link rel="stylesheet" type="text/css" href="week03.css">
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $address1 = $address2 = $state = $city = $zip = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["address"])) {
    $address1Err = "Address is required";
  } else {
    $address1 = test_input($_POST["address"]);
    // check if e-mail address is well-formed
    if (!preg_match('/\d+ [0-9a-zA-Z ]+/', $address1)) {
      $address1Err = "Invalid address format"; 
    }
  }
    
  if (empty($_POST["address2"])) {
    $address2 = "";
  }else {
    $address2 = test_input($_POST["address2"]);
  }
  
  if (empty($_POST["state"])) {
    $state = "";
  } else {
    $state = test_input($_POST["state"]);
    if (!preg_match('/\w\w$/', $state)) {
        $stateErr = "Invalid state format"; 
      }
  }

  if (empty($_POST["zip"])) {
    $zipErr = "Zip is required";
  } else {
    $zip = test_input($_POST["zip"]);

    if (!preg_match('#[0-9]{5}#', $zip)) {
        $zipErr = "Invalid zip format"; 
      }
  }

  if (empty($_POST["city"])) {
    $cityErr = "Zip is required";
  } else {
    $city = test_input($_POST["city"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<div class="nForm">
<form method="post" action="confirmation.php">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  Address 1: <input type="text" name="address1" value="<?php echo $address1;?>">
  <span class="error"> <?php echo $address1Err;?></span>
  <br><br>
  Address 2: <input type="text" name="address2" value="<?php echo $address2;?>">
  <span class="error"><?php echo $address2Err;?></span>
  <br><br>
  State: <input type="text" name="state" value="<?php echo $state;?>">
  <span class="error"><?php echo $stateErr;?></span>
  <br><br>
  City: <input type="text" name="city" value="<?php echo $city;?>">
  <span class="error"><?php echo $cityErr;?></span>
  <br><br>
  Zip: <input type="text" name="zip" value="<?php echo $zip;?>">
  <span class="error"><?php echo $zipErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>

</body>
</html>