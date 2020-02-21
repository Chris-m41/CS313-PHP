<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="myDb.sql" method="post">
    <textarea name="display_name"></textarea>
    <textarea name="price"></textarea>
    <input type="submit" value="Add Cookie Info" />
    </form>
    <?php
        require('connect.php');

        $db = get_db();

        // Cookie Query
        $cookieQuery = 'SELECT id, display_name, price FROM Cookies';
        $stmt = $db->prepare($cookieQuery);
        $stmt->execute();
        $cookies = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $query = 'INSERT INTO Cookies (display_name, price)'
        . ' VALUES (display_name, price);';
        $db->query($cookieQuery);
        var_dump($db->errorInfo());
    ?>
</body>
</html>