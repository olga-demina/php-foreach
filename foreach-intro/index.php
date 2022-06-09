<?php
$products = [
    "latte",
    "pane",
    "biscotti"
];

foreach($products as $item) {
    echo "<p>" . $item . "</p>";
}

?>

<h2>Studente</h2>

<?php

$student = [
   "name" => "olga",
   "lastname" => "demina",
   "age" => 36 
];

foreach($student as $field => $value ) {
    echo  "<p>". $field . ": " . $value . "</p>";
}

?>

<?php
    // Snack 3
    // Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
?>

<?php
foreach ($posts as $data => $data_posts_array) {
    echo "<h2>" . $data . "</h2>";
    foreach($data_posts_array as $post) {
        echo "<h3>" . $post["title"] . "</h3>";
        echo "<p>" . $post["author"] . "</p>";
        echo "<p>" . $post["text"] . "</p>";
    }
}

?>