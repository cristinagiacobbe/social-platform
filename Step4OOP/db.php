<?php
//instance from class Post (handmade)

$posts = [
    new post(
        'Finalmente si parte! Destinazione vacanze',
        '2022-11-02',
        ["mare", "estate", "vacanze", "relax", "spiaggia"],
        new membership('Mario Rossi', 'mario.rossi@example.com', "01/01/2023", "", "10", "50"),
        new media("", 'https://picsum.photos/400/200')
    ),
    new post(
        'Una giornata di sole sulla spiaggia',
        '2022-09-15',
        ["mare", "sole", "relax", "spiaggia"],
        new membership('Luca Bianchi', 'luca.bianchi@example.com', "01/01/2024", "", "1", "1"),
        new media("", './Hotwell - Invio Richiesta.mp4')
    )
];
