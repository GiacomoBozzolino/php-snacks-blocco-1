<?php
$display= false;
$results = false;
$instruction = 'Per favore, inserisci i tuoi dati.';

    // creo una condizione per le stringhe diverse da valore null
    if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        // aggiunto controllo se i campi sono vuoti
        if(($_GET['name']!= '' ) && ($_GET['email'] != '') && ($_GET['age'] != '')){
            $display = true;

            // aggiungo il controllo per le condizioni con cui mandare il messaggio
            if ((strlen($name) > 3) && str_contains($email, '@') && str_contains($email, '.') && is_numeric($age) ) {
                $results = true; 
            }
        }

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" id="name" name="name" placeholder="nome">
        <input type="text" id="age" name="age" placeholder="età">
        <input type="text" id="email" name="email" placeholder="email">
        <button>invia</button>
    </form>
    
    <div >
        <?php if ($display === true) { 
            // uso un operatore ternario per stampare il messaggio a seconda della condizione
            echo ($results === true) ? 'Accesso Consentito' : 'Accesso Negato';
        }
        else { 
            echo $instruction;

        };
        ?>
            
    </div>
</body>
</html>