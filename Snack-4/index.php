<?php
// creo un array vuoto
$randomNumbers= [];

// faccio in modo che si riempa l'array fino a 15 volte
while(count($randomNumbers) < 15){
    // genero i numeri casuali
    $generateNumbers = rand(1,15);
//   metto la condizione per cui il numero non debba trovarsi già tra quelli creati nell'array
    if(!in_array($generateNumbers, $randomNumbers)){
        $randomNumbers[] = $generateNumbers;
    }  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
    <body>
        <div>
             <ul>
                <?php foreach($randomNumbers as $numbers) {?>
                    <li>
                        <?php echo $numbers?>
                    </li>
                <?php }?>
            </ul>
        </div> 
    </body>
</html>