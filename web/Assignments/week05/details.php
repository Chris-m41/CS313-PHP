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
    foreach($courses as $course)
    {
        $id = $cookies['id'];
        $name = $cookies['display_name'];
        $price = $cookies['price'];
        echo"<p>$name - $price </p>";
    }
    ?>
</body>
</html>