<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../index.css">
    <title>Add gum</title>
</head>
<body>
<form action="../forms/addGum.php" method="post">
    Enter Gum Name: <br> <textarea name="display_name"></textarea><br>
    Enter Gum Price: <br> <textarea name="price"></textarea><br>
    Enter Gum Pieces Amount: <br> <textarea name="pieces"></textarea><br>
    <input type="submit" value="Add Gum Info" /><br><br>
    </form>


    <h3><a href="../details.php">Return to Main Menu</a></h3>
</body>
</html>