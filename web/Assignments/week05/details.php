<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require('connect.php');
        $db = get_db();

        $cookieQuery = 'SELECT id, display_name, price FROM Cookies';
        $stmt = $db->prepare($query);
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
</body>
</html>