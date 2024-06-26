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

    /**
     * Constructor for the Post class
     * 
     * @param Int @id The post id
     * @param String @author The post author
     * @param String @title The post title
     * @param String @date The post date
     * @param Array @medias The post medias
     * 
     */
    public function __construct(public int $id, public string $author, public string $title, public string $date, public array $medias)
    {
        $this->id = $id;
        $this->author = $author;
        $this->title = $title;
        $this->date = $date;
        $this->medias = $medias;
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
