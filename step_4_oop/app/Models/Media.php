<?php

// Class declaration

/**
 * ### Class Media
 * 
 * @author Leonard Suli
 * @license MIT
 * @copyright 2024 Leonard Suli
 */
class Media
{
    public $id;
    public $type;
    public $path;

    /**
     * Constructor for the Media class
     * 
     * @param Int @id The media id
     * @param String @type The media type
     * @param String @path The media path
     * 
     */
    public function __construct($id, $type, $path)
    {
        $this->id = $id;
        $this->type = $type;
        $this->path = $path;
    }

    // Getter for $id
    public function getId()
    {
        return $this->id;
    }

    // Getter for $type
    public function getType()
    {
        return $this->type;
    }

    // Getter for $path
    public function getPath()
    {
        return $this->path;
    }
}