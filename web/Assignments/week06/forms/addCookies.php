<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="addCookies.php" method="post">
    <textarea name="display_name"></textarea>
    <textarea name="price"></textarea>
    <input type="submit" value="Add Cookie Info" />
    </form>

    <?php
        // get the data from the POST
    $display_name = $_POST['display_name'];
    $price = $_POST['price'];
  
// For debugging purposes, you might include some echo statements like this
// and then not automatically redirect until you have everything working.

// echo "book=$book\n";
// echo "chapter=$chapter\n";
// echo "verse=$verse\n";
// echo "content=$content\n";

// we could (and should!) put additional checks here to verify that all this data is actually provided


require("dbConnect.php");
$db = get_db();

try
{
	// Add the Scripture

	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO cookies(display_name, price) VALUES(:display_name, :price )';
	$statement = $db->prepare($query);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':display_name', $display_name);
	$statement->bindValue(':price', $price);

	$statement->execute();

	// get the new id
	$cookieId= $db->lastInsertId("id");
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: showTopics.php");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
    ?>
</body>
</html>