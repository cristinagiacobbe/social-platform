<?php

class Post
{
    /**
     * Class of posts (parent class)
     */
    public function __construct(public string $title, public $date, public array $tags, public Membership $membership, public Media $media)
    {
        $this->title = $title;
        $this->date = $date;
        $this->tags = $tags;
        $this->membership = $membership;
        $this->media = $media;
    }

    public function formatDate()
    {
        $string_date = date_create($this->date);
        return date_format($string_date, "d/m/Y");
    }
}
