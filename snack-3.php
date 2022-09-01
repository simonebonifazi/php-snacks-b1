<!-- Creare un array di array. Ogni array figlio
 avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data.
 Stampare ogni data con i relativi post. -->

 <?php

$posts_by_date = [

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

// var_dump($posts_by_date);

 for($i = 0; $i < count($dates); $i++) {

     $dates = array_keys($posts_by_date);
     
     $date = $dates[$i];

    };
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
        <?php for($i = 0; $i < count($dates); $i++) { 

            $date = $dates[$i]; //data chiave del singolo giro
            $posts = $posts_by_date[$date]
        ?>
            <li>
            <strong>
            <?php echo $date ?> :
            </strong>
            <ul>
                <?php for($j = 0; $j < count($posts); $j++) :
                ?>
                <li>
                    <p> <?= $posts[$j]['title'] ?></p>
                    <p> <?= $posts[$j]['author'] ?></p>
                    <p> <?= $posts[$j]['text'] ?></p>
                </li>
                <?php endfor ?>
            </ul>
        
           
        <?php }?>
    </ul>
</body>
</html>