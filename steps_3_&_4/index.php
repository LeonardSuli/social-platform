<?php

require_once __DIR__ . '/database/db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="position-fixed w-100 bg-dark text-white d-flex z-1">

        <div class="container-medium d-flex justify-content-between align-items-center">

            <div>
                <img class="logo my-2" src="./assets/img/logo.png" alt="">
            </div>

            <nav class="nav d-flex nowrap">
                <a class="nav-link" href="#" aria-current="page">Home</a>
                <a class="nav-link" href="./about.php">About</a>
                <a class="nav-link" href="./contacts.php">Contacts</a>
            </nav>

        </div>

    </header>

    <main class="bg-body-secondary">

        <section>
            <div class="container-medium">
                <div class="row row-cols-1 g-5">

                    <?php foreach ($posts as $post) : ?>

                        <div class="col">

                            <div class="card">

                                <div class="card-header text-white bg-primary">
                                    <h3><?= $post->title ?></h3>

                                    <div>
                                        <span>pubblicato da </span>
                                        <span><strong><?= $post->author ?></strong></span>
                                    </div>

                                    <div>
                                        <span>in data</span>
                                        <span><strong><?= $post->date ?></strong></span>
                                    </div>

                                </div>

                                <div class="card-body bg-primary-subtle">

                                    <div class="row">

                                        <?php foreach ($post->medias as $media) : ?>

                                            <div class="col-6">

                                                <?php if (str_contains($media->path, '.mp4')) : ?>

                                                    <video width="320" height="240" controls>
                                                        <source src="<?= $media->path ?>" type="video/mp4">
                                                    </video>

                                                <?php else : ?>

                                                    <img src="<?= $media->path ?>" alt="">

                                                <?php endif; ?>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>

    </main>

</body>

</html>