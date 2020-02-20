<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require('connect.php');

        $db = get_db();

        // Cookie Query
        $cookieQuery = 'SELECT id, display_name, price FROM Cookies';
        $stmt = $db->prepare($cookieQuery);
        $stmt->execute();
        $cookies = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Soda Query
        $sodaQuery = 'SELECT id, display_name, price FROM Soda';
        $stmt = $db->prepare($sodaQuery);
        $stmt->execute();
        $sodas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Soaps Query
        $soapQuery = 'SELECT id, display_name, price FROM Soaps';
        $stmt = $db->prepare($soapQuery);
        $stmt->execute();
        $soaps = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Chocolate Query
        $chocolateQuery = 'SELECT id, display_name, price FROM Chocolate';
        $stmt = $db->prepare($chocolateQuery);
        $stmt->execute();
        $chocolates = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Gum Query
        $gumQuery = 'SELECT id, display_name, price FROM Gum';
        $stmt = $db->prepare($gumQuery);
        $stmt->execute();
        $gums = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<body>
  
    <h1>See brands pertaining to that item.</h1>
    <h3>Click on one checkbox at a time</h3>
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
            echo $_POST['Cookies']; // Displays value of checked checkbox.
            foreach($cookies as $cookie)
            {
                $id = $cookie['id'];
                $name = $cookie['display_name'];
                $price = $cookie['price'];
                echo"<p>$name - $price </p>";
            }
        }
        elseif (isset($_POST['Soda']))
        {
            echo $_POST['Soda'];
            foreach($sodas as $soda)
            {
                $id = $soda['id'];
                $name = $soda['display_name'];
                $price = $soda['price'];
                echo"<p>$name - $price </p>";
            }
        }
        elseif (isset($_POST['Soap']))
        {
            echo $_POST['Soap'];
            foreach($soaps as $soap)
            {
                $id = $soap['id'];
                $name = $soap['display_name'];
                $price = $soap['price'];
                echo"<p>$name - $price </p>";
            }
        }
        elseif (isset($_POST['Chocolate']))
        {
            echo $_POST['Chocolate'];
            foreach($chocolates as $chocolate)
            {
                $id = $chocolate['id'];
                $name = $chocolate['display_name'];
                $price = $chocolate['price'];
                echo"<p>$name - $price </p>";
            }
        }
        elseif (isset($_POST['Gum']))
        {
            echo $_POST['Gum'];
            foreach($gums as $gum)
            {
                $id = $gum['id'];
                $name = $gum['display_name'];
                $price = $gum['price'];
                echo"<p>$name - $price </p>";
            }
        }
    ?>
    <h2><a href="addItem.php">Add an Item</a></h2>
    <h2>Want to add an item to the list?</h2>
    <h2>Click on the item and then type in the required information.</h2>

</body>
</html>