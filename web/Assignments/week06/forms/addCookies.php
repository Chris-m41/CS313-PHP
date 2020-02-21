<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="../details.php" method="post">
    <textarea name="display_name"></textarea>
    <textarea name="price"></textarea>
    <input type="submit" value="Add Cookie Info" />
    </form>
    <?php
        require('connect.php');

        $db = get_db();

        if(isset($_POST["submit"])){
           
            try {
            $dbh = $db
            
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
            $sql = "INSERT INTO students (student_name, student_email, student_city)
            VALUES ('".$_POST["display_name"]."','".$_POST["price"]'");
            if ($dbh->query($sql)) {
            echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
            }
            else{
            echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
            }
            
            $dbh = null;
            }
            catch(PDOException $e)
            {
            echo $e->getMessage();
            }
            
            }
    ?>
</body>
</html>