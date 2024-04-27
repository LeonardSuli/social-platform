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
    // public $media;

    /**
     * Constructor for the User class
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
}


$post_1 = new Post(1, 'Mario Rossi', 'Finalmente si parte! Destinazione vacanze', '2022-11-22');
var_dump($post_1);
