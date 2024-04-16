<?php
//instance from class Post (handmade)

$posts = [
    new post(
        'Finalmente si parte! Destinazione vacanze',
        '2022-11-02',
        ["mare", "estate", "vacanze", "relax", "spiaggia"],
        new user('Mario Rossi', 'mario.rossi@example.com'),
        new media("", 'https://picsum.photos/400/200')
    ),
    new post(
        'Una giornata di sole sulla spiaggia',
        '2022-09-15',
        ["mare", "sole", "relax", "spiaggia"],
        new user('Luca Bianchi', 'luca.bianchi@example.com'),
        new media("", './Hotwell - Invio Richiesta.mp4')
    )
];
