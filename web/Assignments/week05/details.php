<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require('connect.php');
        $db = get_db();

        $query = 'SELECT id, display_name, price FROM Cookies';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        $id = $course['id'];
        $name = $course['display_name'];
        $price = $course['price'];
        echo"<li><p>$name - $price </p></li>";
    }
    ?>
</body>
</html>