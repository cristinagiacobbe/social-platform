<?php

require_once __DIR__ . '/Model/Media.php';
require_once __DIR__ . '/Model/Post.php';
require_once __DIR__ . '/Model/User.php';
require_once __DIR__ . '/Model/ExtendedClasses.php';
require_once __DIR__ . '/db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel="stylesheet" href="style.css">
    <title>Posts</title>
</head>

<body class="bg-secondary">
    <section>
        <div class="container ">

            <header class="m-4">
                <h1 class="text-info text-center">Social platform</h1>
                <h2 class="text-dark text-center">Ultimi post pubblicati</h2>
            </header>

            <div class="row row-cols-1 row-cols-sm-3 g-3">

                <?php

                foreach ($posts as $post) : ?>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3><?= $post->title ?></h3>
                                <p><?= $post->formatDate() ?></p>
                                <?php
                                $membership = $post->membership
                                ?>
                                <h3 class="text-success"><?= $membership->username ?></h3>
                                <p><?= $membership->loyalty() ?></p>
                                <?php
                                $media = $post->media
                                ?>
                                <!--   <p><?= $media->typeMedia() ?></p> -->
                                <?php if ($media->type === "photo") : ?>
                                    <img class="card-img-top rounded mx-auto d-block" src=" <?= $media->path ?>" alt="">
                                <?php else : ?>
                                    <video width="320" height="240" controls>
                                        <source src="<?= $media->path ?>" type="video/mp4">
                                    </video>
                                <?php endif; ?>
                            </div>

                            <div class="card-footer">
                                <h4><strong>Tags:</strong></h4>
                                <?php foreach ($post->tags as $tags) : ?>
                                    <span><?= $tags ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>


                <?php endforeach; ?>

            </div>

        </div>
    </section>





</body>

</html>