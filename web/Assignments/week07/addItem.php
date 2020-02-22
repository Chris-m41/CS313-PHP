<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Add Item</title>
</head>
<body>
    <div>
    <h2>Want to add an item to the list?</h2>
    <h2>Click on the item and then type in the required information.</h2>
        <div >
        <form action="phpRedirects/cookies.php">
        <input id="addItem" type="submit" value="Add Cookie Brand" />
        </form>

        <form action="phpRedirects/soda.php">
        <input id="addItem" type="submit" value="Add Soda Brand" />
        </form>

        <form action="phpRedirects/soap.php">
        <input id="addItem" type="submit" value="Add Soap Brand" />
        </form>

        <form action="phpRedirects/chocolate.php">
        <input id="addItem" type="submit" value="Add Chocolate Brand" />
        </form>

        <form action="phpRedirects/gum.php">
        <input id="addItem" type="submit" value="Add Gum Brand" />
        </form>
        </div>
        <h3><a href="details.php">Return to Main Menu</a></h3>
    </div>
</body>
</html>