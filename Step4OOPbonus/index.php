<?php

require_once __DIR__ . '/Post.php'

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Liked posts</title>
</head>

<body class="bg-secondary">
    <section>
        <div class="container ">

            <header class="m-4">
                <h1 class="text-warning text-center">Social platform</h1>
                <h2 class="text-dark text-center">✌️👍 Classifica dei post più graditi 👍✌️</h2>
            </header>

            <div class="row row-cols-1 row-cols-sm-3 g-3">

                <?php for ($i = 0; $i < $results->num_rows; $i++) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-title">
                                <h3><?= $post->user[$i] ?></h3>
                            </div>
                            <div class="card-body">
                                <h4><?= $post->title[$i] ?></h4>
                                <img src="<?= $post->media[$i] ?>" alt="image">
                            </div>
                            <div class="card-footer">
                                <h4><?= $post->formatDate($date[$i]) ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>

        </div>
    </section>

</body>

</html>