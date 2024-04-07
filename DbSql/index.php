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

$sql = "SELECT COUNT(`medias`.`path`) AS `upload_media_number`, `medias`.`user_id`, `users`.`username`
FROM `medias`
JOIN `users` ON `medias`.`user_id` = `users`.`id`
GROUP BY `medias`.`user_id`
ORDER BY `upload_media_number` DESC;";

$result = $connection->query($sql);
/* var_dump($result) */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Db table</title>
</head>

<body>
    <div class="container">
        <h1 class="my-5">📽️ Ecco la lista degli utenti con più media caricati: 🖼️</h1>

        <table class="table table-bordered border-primary my-5 ">
            <thead>
                <tr>
                    <th scope="col">Username user</th>
                    <th scope="col">User id</th>
                    <th scope="col">Number of uploaded medias</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                <?php if ($result->num_rows > 0) : ?>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <th scope="row"><?= $row['username'] ?></th>
                            <td><?= $row['user_id'] ?></td>
                            <td><?= $row['upload_media_number'] ?></td>
                        </tr>
                <?php endwhile;
                endif; ?>
            </tbody>
        </table>

    </div>
</body>

</html>