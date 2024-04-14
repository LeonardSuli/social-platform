<?php

// Database connection

// Define some constants
define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'social_platform');

// Create an instance of the new connection
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check if there is a connection error
if ($connection && $connection->connect_error) {

    echo "Connection failed: " . $connection->connect_error;

    die;
}





// Execute the query
// $sql = "SELECT `users`.`username`, COUNT(*) AS 'tot_video'
// FROM `medias`
// JOIN `users` ON `users`.`id` = `medias`.`user_id`
// WHERE `medias`.`type` = 'video'
// GROUP BY `users`.`username`;";

// $result = $connection->query($sql);

var_dump(empty($_POST['name']));
var_dump($_POST);

if (empty($_POST['name'])) {

    // Execute the query
    $sql = "SELECT `users`.`username`, COUNT(*) AS 'tot_video'
    FROM `medias`
    JOIN `users` ON `users`.`id` = `medias`.`user_id`
    WHERE `medias`.`type` = 'video'
    -- AND `users`.`username` = 'Luca%'
    GROUP BY `users`.`username`;";

    $result = $connection->query($sql);
} else {

    // var_dump('filterrr');

    $name = $_POST['name'];

    // Execute the query
    $sql = "SELECT `users`.`username`, COUNT(*) AS 'tot_video'
    FROM `medias`
    JOIN `users` ON `users`.`id` = `medias`.`user_id`
    WHERE `medias`.`type` = 'video'
    AND `users`.`username` = '" . $name . "'
    GROUP BY `users`.`username`;";

    // var_dump($sql);

    $result = $connection->query($sql);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form action="" method="post" class="mb-5">
        <input type="text" name="name" id="name" placeholder="Search...">
        <button class="btn btn-primary" type="submit">Search</button>
        <a href="index.php">Reset</a>
    </form>

    <!-- Loop over the results -->
    <?php while ($row = $result->fetch_assoc()) :

        // array destructuring
        ['username' => $username, 'tot_video' => $tot_video] = $row; ?>


        <!-- <?php var_dump($username, $tot_video); ?> -->

        <div>
            <span><?php echo $username ?></span>
            <span><?php echo $tot_video ?></span>
        </div>


    <?php endwhile; ?>

    <?php if ($result->num_rows === 0) : ?>

        <p>No resuts found</p>

    <?php endif ?>


</body>

</html>