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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Details</title>
</head>
<body>
  <div class="container">
    <h1>See brands pertaining to that item.</h1>
    <h3>Click on one checkbox at a time</h3>
    <div class="container-md">
    <form action="#" method="post">
        <input id="displayItems" type="checkbox" name="Cookies" value="Cookies">Cookies</input><br>
        <input id="displayItems" type="checkbox" name="Soda" value="Soda">Soda</input><br>
        <input id="displayItems" type="checkbox" name="Soap" value="Soap">Soap</input><br>
        <input id="displayItems" type="checkbox" name="Chocolate" value="Chocolate">Chocolate</input><br>
        <input id="displayItems" type="checkbox" name="Gum" value="Gum">Gum</input><br>
        <input type="submit" name="submit" value="Submit"/><br><br>
    </form>
    </div>
   

    <?php
        if (isset($_POST['Cookies'])){
            echo "<h3> Cookies </h3>";
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
            echo "<h3> Soda </h3>";
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
            echo "<h3> Soap </h3>";
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
            echo "<h3> Chocolate </h3>";
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
            echo "<h3> Gum </h3>";
            foreach($gums as $gum)
            {
                $id = $gum['id'];
                $name = $gum['display_name'];
                $price = $gum['price'];
                echo"<p>$name - $price </p>";
            }
        }
    ?>
    
     <h3><a href="addItem.php">Add an Item</a></h3>
     </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>