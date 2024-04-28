<?php

// Include database connection
include_once __DIR__ . '/database/db_connection.php';


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
        GROUP BY `users`.`username`;";

    // Prepare the statement
    if ($stmt = $connection->prepare($sql)) {

        // Bind the username parameter
        $stmt->bind_param("s", $username);

        // Set & execute the parameter
        $username = "%$name%";
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();
    } else {

        echo "Error preparing statement: " . $connection->error;
    }

    // Close statement
    $stmt->close();
}


// Close connection
$connection->close();


// Include head
include_once __DIR__ . '/layouts/head.php';
?>

<body>

    <!-- Include header -->
    <?php include_once __DIR__ . '/layouts/header.php'; ?>

    <main class="text-center bg-body-secondary min-vh-100">

        <div class="container-sm my-5">

            <h3>Inserisci il nome di un'utente per sapere quanti video ha postato</h3>

            <!-- Form with post method -->
            <form action="" method="post" class="border border-primary bg-primary-subtle py-5 my-5" style="margin: 0 350px;">
                <input type="text" name="name" id="name" placeholder="Search a user...">
                <button class="btn btn-primary" type="submit">Search</button>
                <a href="contacts.php" class="text-decoration-none">Reset</a>
            </form>

            <!-- Loop over the results -->
            <?php while ($row = $result->fetch_assoc()) :

                // Array destructuring
                ['username' => $username, 'tot_video' => $tot_video] = $row; ?>

                <!-- Results get from DB -->
                <div class="py-2">
                    <span><strong><?php echo $username ?></strong></span>
                    <span>ha postato</span>
                    <span><strong><?php echo $tot_video ?></strong></span>
                    <span>video</span>
                </div>

            <?php endwhile; ?>

            <!-- Condition if there isn't a result -->
            <?php if ($result->num_rows === 0) : ?>

                <p class="text-danger"><strong>No results found</strong></p>

            <?php endif ?>

        </div>

    </main>

    <!-- Include footer -->
    <?php include_once __DIR__ . '/layouts/footer.php'; ?>

</body>

</html>