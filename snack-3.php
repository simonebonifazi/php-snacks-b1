<!-- Creare un array di array. Ogni array figlio
 avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data.
 Stampare ogni data con i relativi post. -->

 <?php

$posts = [

    '10/01/2022' => [
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
    '10/02/2022' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2022' => [
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

var_dump($posts)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST - ARRAY DI ARRAY</title>
</head>
<body>
    <h1>POSTS</h1>

    <ul>
        <?php for($i = 0; $i < count($posts); $i++) : ?>
            <li>
            <strong>
            <?php echo $posts[$i][] ?> :
            </strong>
        
            <!-- <?php echo $posts[$i]['title'] ?> ; <br>
            <?php echo $posts[$i]['author'] ?> ; <br>
            <?php echo $posts[$i]['text'] ?> ; <br> -->
            </li>
        <?php endfor?>
    </ul>
</body>
</html>