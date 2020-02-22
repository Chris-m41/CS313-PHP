<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../index.css">
    <title>Add Chocolate</title>
</head>
<body>
    <div class="container">
        <div class="container-md">
<form action="../forms/addChocolate.php" method="post">
    Enter Chocolate Name: <br> <textarea name="display_name"></textarea> <br>
    Enter Chocolate Price: <br> <textarea name="price"></textarea> <br>
    Enter Chocolate Weigh in Ounces: <br> <textarea name="ounces"></textarea> <br>
    <input type="submit" value="Add Chocolate Info" /><br><br>
    </form>
    </div>

    <h3><a id="mainMenu" href="../details.php">Return to Main Menu</a></h3>
    </div>
</body>
</html>