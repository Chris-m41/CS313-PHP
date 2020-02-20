<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require('connect.php');
        $db = get_db();

        $cookieQuery = 'SELECT id, display_name, price FROM Cookies';
        $stmt = $db->prepare($cookieQuery);
        $stmt->execute();
        $cookies = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<body>
    <?php
    foreach($cookies as $cookie)
    {
        $id = $cookie['id'];
        $name = $cookie['display_name'];
        $price = $cookie['price'];
        echo"<p>$name - $price </p>";
    }
    ?>
    <h1>Click on the checkbox to see brands pertaining to that item.</h1>
    <form action="#" method="post">
        <input type="checkbox" name="Cookies" value="Cookies">Cookies</input>
        <input type="checkbox" name="Soda" value="Soda">Soda</input>
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
    ?>

</body>
</html>