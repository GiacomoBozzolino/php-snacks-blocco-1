<?php
 $matches=[
    [
        'match'=> 'Olimpia Milano - Cantù',
        'results' => '55-60',

    ],
    [
        'match'=> 'Denver Nuggets - Miami Heat',
        'results' => '94-89',

    ],
    [
        'match'=> 'Boston Celtics - Philadelphia 76ers',
        'results' => '112-88',

    ],
    [
        'match'=> 'Golden State Warriors - Los Angeles Lakers',
        'results' => '121-106',

    ],
    [
        'match'=> 'Tortona - Virtus Bologna',
        'results' => '82-89',

    ],

 ]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Snack 1</title>
</head>
    <body>
        <div class="text-center">
            <ul class="border">
            <?php foreach($matches as $match) {?>
                <li  class="border">
                    <h3>teams:</h3>
                    <?php echo $match['match'] ?>
                    <h3>results:</h3>
                    <?php echo $match['results'] ?>
                </li>
            <?php }?>
            </ul>
        </div>
        
    </body>
</html>