<?php

define('DB_SERVERNAME', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db.sql');
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connection && $connection->connect_error) {
    echo 'Database connection failed';
    die;
}

//Make a query to extract the most liked posts, with post-title, author and date of creation
//I limit the search to the first 9 results


$sql = "SELECT COUNT(`likes`.`post_id`) AS `like_number`, `posts`.`title`, `users`.`username`, `posts`.`date`
FROM `users`
JOIN `posts`ON `users`.`id` = `posts`.`user_id`
LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id` 
GROUP BY `posts`.`id`
ORDER BY `like_number` DESC
LIMIT 9;";

$results = $connection->query($sql);

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

/* $post_db = []; */

while ($row = $results->fetch_assoc()) {
    $random_media = rand(0, count($media_list));

    $posts[] = new Post($row['username'], $row['title'], $row['date'], $media_list[$random_media]);
};
/* var_dump($posts); */
