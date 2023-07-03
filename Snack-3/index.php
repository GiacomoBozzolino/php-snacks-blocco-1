<?php
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Snack 3</title>
</head>
<body>
    <div>
        <ul>
            <?php  foreach($posts as $index => $article){ ?>
            <li class=pt-4>
                <h2>
                    <?php echo $index ?>
                </h2>
                    <ul>
                        <?php  foreach($article as $post){ ?>
                            <li>
                                <div>
                                    <?php echo $post['title'] ?> 
                                </div>   
                            </li>
                            <li>
                                <div>
                                    <?php echo $post['author'] ?> 
                                </div>

                            </li>
                            <li>
                                <div>
                                    <?php echo $post['text'] ?> 
                                </div>
                            </li>
                            <?php } ?>
                    </ul>     
                <?php } ?>
            </li>
        </ul>
    </div>
    
</body>
</html>