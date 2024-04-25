<?php

// DATABASE CONNECTION

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


// Condition if the input is not empty
if (!empty($_POST['name'])) {

    // Get username from the POST request and save it in a variable
    $name = $_POST['name'];

    // Execute the query
    $sql = "SELECT `users`.`username`, COUNT(*) AS 'tot_video'
        FROM `medias`
        JOIN `users` ON `users`.`id` = `medias`.`user_id`
        WHERE `medias`.`type` = 'video'
        AND `users`.`username` LIKE ?
        GROUP BY `users`.`username`";

    // Prepare the statement
    $stmt = $connection->prepare($sql);

    // Bind the username parameter
    $stmt->bind_param("s", $username);

    // Set parameter
    $username = "%$name%";

    // Execute the prepared statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
}


$connection->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>step_3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="text-center">

        <div class="container-sm my-5">

            <form action="" method="post" class="border py-3 my-5">
                <input type="text" name="name" id="name" placeholder="Search...">
                <button class="btn btn-primary" type="submit">Search</button>
                <a href="index.php" class="text-decoration-none">Reset</a>
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

            <!-- Condition if there isn't a result -->
            <?php if ($result->num_rows === 0) : ?>

                <p class="text-danger"><strong>No resuts found</strong></p>

            <?php endif ?>

        </div>

    </main>



</body>

</html>