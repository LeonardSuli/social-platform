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

    /**
     * Constructor for the Media class
     * 
     * @param Int @id The media id
     * @param String @type The media type
     * @param String @path The media path
     * 
     */
    public function __construct(public int $id, public string $type, public string $path)
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



/**
 * ### Class Video
 * 
 * @author Leonard Suli
 * @license MIT
 * @copyright 2024 Leonard Suli
 */
class Video extends Media
{

    /**
     * Constructor for the Video class extends media
     * 
     * @param Int @id The media id
     * @param String @type The media type
     * @param String @path The media path
     * @param String @resolution The video resolution
     * @param Int @length The video length
     * 
     */
    public function __construct(public int $id, public string $type, public string $path, public string $resolution, public int $length)
    {
        parent::__construct($id, $type, $path);
        $this->resolution = $resolution;
        $this->length = $length;
    }
}


/**
 * ### Class Photo
 * 
 * @author Leonard Suli
 * @license MIT
 * @copyright 2024 Leonard Suli
 */
class Photo extends Media
{

    /**
     * Constructor for the Photo class extends media
     * 
     * @param Int @id The media id
     * @param String @type The media type
     * @param String @path The media path
     * @param String @resolution The photo resolution
     */
    public function __construct(public int $id, public string $type, public string $path, public string $resolution)
    {
        parent::__construct($id, $type, $path);
        $this->resolution = $resolution;
    }
}
