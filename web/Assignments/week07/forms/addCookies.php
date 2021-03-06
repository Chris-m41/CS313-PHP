<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Cookies</title>
</head>
<body>
    <?php
        // get the data from the POST
    $display_name = $_POST['display_name'];
    $price = $_POST['price'];
  

    require("../connect.php");
    $db = get_db();

    try
    {
      

        // We do this by preparing the query with placeholder values
        $query = 'INSERT INTO cookies(display_name, price) VALUES(:display_name, :price )';
        $statement = $db->prepare($query);

        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':display_name', $display_name);
        $statement->bindValue(':price', $price);

        $statement->execute();

       
    }
    catch (Exception $ex)
    {
        // Please be aware that you don't want to output the Exception message in
        // a production environment
        console.log("Error with DB. Details: $ex");
        echo "Error with DB. Details: $ex";
        die();
    }

    // finally, redirect them to a new page to actually show the topics
    header("Location: ../details.php");

    die(); // we always include a die after redirects. In this case, there would be no
        // harm if the user got the rest of the page, because there is nothing else
        // but in general, there could be things after here that we don't want them
        // to see.
    ?>
   >
</body>
</html>