<?php
class Photo extends Media
{
    public $colour_scale;
    /**
     * Specific class of Media (child class)
     */
    public function _construct($type, $path, $colour_scale)
    {
        parent::__construct($type, $path);
        $this->colour_scale = $colour_scale;
    }
}

class Video extends Media
{
    public $duration;
    /**
     * Specific class of Media (child class)
     */
    public function _construct($type, $path, $duration)
    {
        parent::__construct($type, $path);
        $this->duration = $duration;
    }
}
