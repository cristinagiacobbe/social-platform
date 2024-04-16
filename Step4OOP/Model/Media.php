<?php

class Media
{
    /**
     * Class of medias (parent class)
     * @param string type of media (photo or video)
     * @param string path (route of image/video)
     */
    public function __construct(public string $type, public string $path)
    {
        $this->type = $type;
        $this->path = $path;
    }

    public function typeMedia()
    {
        if (strpos($this->path, ".mp4")) {
            $this->type = "video";
        } else {
            $this->type = "photo";
        }
        return $this->type;
    }
}
