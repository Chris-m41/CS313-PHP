<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddItem</title>
</head>
<body>
    <h2>Want to add an item to the list?</h2>
    <h2>Click on the item and then type in the required information.</h2>
    <form action="#" method="post">
        <input type="checkbox" name="Cookies" value="Cookies">Cookies</input>
        <input type="checkbox" name="Soda" value="Soda">Soda</input>
        <input type="checkbox" name="Soap" value="Soap">Soap</input>
        <input type="checkbox" name="Chocolate" value="Chocolate">Chocolate</input>
        <input type="checkbox" name="Gum" value="Gum">Gum</input>
        <input type="submit" name="submit" value="Submit"/>
    </form>

   <?php
    if (isset($_POST['Cookies'])){
        echo $_POST['Cookies'];
        <form action="#" method="post">
            <textarea name="display_name"></textarea>
            <textarea name="price"></textarea>
        </form>
        <input type="submit" name="submit" value="Submit"/>
    }
   ?>
</body>
</html>