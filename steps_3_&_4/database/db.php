<?php

require_once __DIR__ . '/../app/Models/Post.php';
require_once __DIR__ . '/../app/Models/Media.php';

$posts = [

    new Post(
        1,
        'Mario Rossi',
        'Finalmente si parte! Destinazione vacanze',
        '22-11-2022',
        [
            new Media(1, 'photo', 'https://picsum.photos/400/300'),
            new Media(1, 'photo', 'https://picsum.photos/400/250'),
            new Media(1, 'video', './assets/img/video.mp4'),
            new Media(1, 'photo', 'https://picsum.photos/600/400')
        ]
    ),

    new Post(
        2,
        'Luca Bianchi',
        'Una giornata di sole sulla spiaggia',
        '15-09-2022',
        [
            new Media(1, 'photo', 'https://picsum.photos/400/300'),
            new Media(1, 'video', './assets/img/video.mp4'),
            new Media(1, 'photo', 'https://picsum.photos/600/300')
        ]
    ),

    new Post(
        3,
        'Anna Verdi',
        'Una serata divertente al karaoke',
        '10-07-2022',
        [
            new Media(1, 'video', './assets/img/video.mp4'),
            new Media(1, 'photo', 'https://picsum.photos/500/300'),
            new Media(1, 'photo', 'https://picsum.photos/400/300')
        ]
    ),

    new Post(
        4,
        'Giuseppe Gialli',
        'Tempo di riflessione e gratitudine',
        '23-05-2022',
        [
            new Media(1, 'photo', 'https://picsum.photos/450/300'),
            new Media(1, 'photo', 'https://picsum.photos/400/300')
        ]
    ),

    new Post(
        5,
        'Laura Neri',
        'Passeggiata serale sotto le stelle',
        '15-03-2022',
        [
            new Media(1, 'photo', 'https://picsum.photos/400/350'),
            new Media(1, 'photo', 'https://picsum.photos/500/300'),
            new Media(1, 'photo', 'https://picsum.photos/400/300'),
            new Media(1, 'photo', 'https://picsum.photos/300/300')
        ]
    ),



];

// var_dump($posts);
