<?php
require __DIR__ . '/connectionDb.php';

class Post
{
    /**
     * Class of posts (partly derived by query sql and partly handmade)
     * @param user is the string derived from result sql
     * @param title is the string derived from result sql
     * @param date is the string derived from result sql    
     * @param media is the added string, not derived from sql
     */
    public function __construct(public string $user, public string $title, public string $date, public $media)
    {
        $this->user = $user;
        $this->title = $title;
        $this->date = $date;
        $this->media = $media;
    }

    public function formatDate()
    {
        $string_date = date_create($this->date);
        return date_format($string_date, "d/m/Y");
    }
}
