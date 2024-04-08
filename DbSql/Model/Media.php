<?php
class medias
{
    /**
     * @param int numeric $id
     * @param string $type of path
     * @param string $path (image or video)
     */
    public function __construct(public int $id_media, public string $type, public string $path)
    {
        $this->id_media = $id_media;
        $this->type = $type;
        $this->path = $path;
    }
}
