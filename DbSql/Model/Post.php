<?php
class Post
{
    /**
     * Class of posts (parent class)
     */
    public function __construct(public int $id, public string $title, public string $date, public $tags, public Users $user, public Media $media)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->tags = $tags;
        $this->user = $user;
        $this->media = $media;
    }

    public function formateDate()
    {
        return date($this->date);
    }
}

$First_post = new Post('1', 'Finalmente si parte! Destinazione vacanze', '2022-11-02', [], $user, $media);

$First_post->setTags(){
    ["mare", "estate", "relax", "vancanze", "spiaggia"]};
