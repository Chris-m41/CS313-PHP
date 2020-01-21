<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="week03.css">
    <script src="week03.js"></script>
    <?php include ("week03Header.php");?>
</head>
<body>
<div class="nForm">
    <div>
    <?php
echo "<p>Thank you for buying! Items will be shipped to following address</p>";
echo $_POST["name"];
echo "<br>";
echo $_POST["address1"];
echo "<br>";
echo $_POST["address2"];
echo "<br>";
echo $_POST["state"];
echo "<br>";
echo $_POST["city"];
echo "<br>";
echo $_POST["zip"];
?>
    </div>
</div>
</body>
</html>