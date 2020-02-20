<?php
        require('connect.php');
        $db = get_db();

        // $cookieQuery = 'SELECT id, display_name, price FROM Cookies';
        // $stmt = $db->prepare($cookieQuery);
        // $stmt->execute();
        // $cookies = $stmt->fetchAll(PDO::FETCH_ASSOC);

        function getCookies(){
            $cookieQuery = 'SELECT id, display_name, price FROM Cookies';
            $stmt = $db->prepare($cookieQuery);
            $stmt->execute();
            $cookies = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return foreach($cookies as $cookie)
            {
                $id = $cookie['id'];
                $name = $cookie['display_name'];
                $price = $cookie['price'];
                echo"<p>$name - $price </p>";
            }
        }
?>