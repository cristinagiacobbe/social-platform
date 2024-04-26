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


//Save all records of every field (username, title and date into variables _list)
while ($row = $results->fetch_assoc()) {
    /* ($user_list .= $row['username']); */

$post= new Post($row['username']) //rivedere questo !!!!!!!!!!!!!!

    ($user_list[] = $row['username']);
    ($title_list[] = $row['title']);
    ($date_list[] = $row['date']);
}
/* var_dump($user_list, $title_list, $date_list) */

/* var_dump($results->num_rows) */