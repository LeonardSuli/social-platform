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


$post_1 = new Post(1, 'Mario Rossi', 'Finalmente si parte! Destinazione vacanze', '2022-11-22');
var_dump($post_1);

$post_2 = new Post(2, 'Mario Rossi', 'Una giornata di sole sulla spiaggia', '2022-09-15');
var_dump($post_1);


var_dump($post_1->getTitle());
