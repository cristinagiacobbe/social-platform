<?php
require __DIR__ . '/connectionDb.php';

class Post
{
    /**
     * Class of posts (partly derived by query sql and partly handmade)
     * @param user is the array derived from result sql
     * @param title is the array derived from result sql
     * @param date is the array derived from result sql
     * @param media is a new array hand made
     */
    public function __construct(public array $user, public array $title, public array $date, public array $media)
    {
        $this->user = $user;
        $this->title = $title;
        $this->date = $date;
        $this->media = $media;
    }

    public function formatDate($date)
    {
        $string_date = date_create($date);
        return date_format($string_date, "d/m/Y");
    }
}
$media_list = [
    "https://picsum.photos/id/18/400/200",
    "https://picsum.photos/id/225/400/200",
    "https://picsum.photos/id/240/400/200",
    "https://picsum.photos/id/203/400/200",
    "https://picsum.photos/id/24/400/200",
    "https://picsum.photos/id/546/400/200",
    "https://picsum.photos/id/319/400/200",
    "https://picsum.photos/id/526/400/200",
    "https://picsum.photos/id/367/400/200"
];

//Make a new instance using variable _list that I created from query sql

$post = new Post($user_list, $title_list, $date_list, $media_list);
/* $post->user = $user_list; */
