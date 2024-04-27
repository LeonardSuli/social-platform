<?php

// Class declaration

/**
 * ### Class Post
 * 
 * @author Leonard Suli
 * @license MIT
 * @copyright 2024 Leonard Suli
 */
class Post
{
    public $id;
    public $author;
    public $title;
    public $date;

    /**
     * Constructor for the Post class
     * 
     * @param Int @id The post id
     * @param String @author The post author
     * @param String @title The post title
     * @param String @date The post date
     * 
     */
    public function __construct($id, $author, $title, $date)
    {
        $this->id = $id;
        $this->author = $author;
        $this->title = $title;
        $this->date = $date;
    }

    // Getter for $id
    public function getId()
    {
        return $this->id;
    }

    // Getter for $author
    public function getAuthor()
    {
        return $this->author;
    }

    // Getter for $title
    public function getTitle()
    {
        return $this->title;
    }

    // Getter for $date
    public function getDate()
    {
        return $this->date;
    }
}


$post_1 = new Post(1, 'Mario Rossi', 'Finalmente si parte! Destinazione vacanze', '22-11-2022');
// var_dump($post_1);

$post_2 = new Post(2, 'Mario Rossi', 'Una giornata di sole sulla spiaggia', '15-09-2022');
// var_dump($post_1);



$posts = [$post_1, $post_2];

// var_dump($posts);


?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="bg-dark text-white d-flex">

        <div class="container-medium d-flex justify-content-between align-items-center">

            <div>
                <img class="logo my-3" src="./logo.png" alt="">
            </div>

            <nav class="nav d-flex nowrap">
                <a class="nav-link" href="#" aria-current="page">Home</a>
                <a class="nav-link" href="#">About</a>
                <a class="nav-link" href="#">Contacts</a>
            </nav>

        </div>

    </header>

    <main class="mt-5">

        <section>
            <div class="container-medium">
                <div class="row row-cols-1 g-3">

                    <?php foreach ($posts as $post) : ?>

                        <div class="col">

                            <div class="card">

                                <div class="card-body">
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

                                <div class="card-footer">
                                    <ul class="d-flex gap-1 list-unstyled">


                                    </ul>
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