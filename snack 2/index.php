<!-- Snack 2
Passare come parametri GET name, mail e age
e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola
e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// definisco variabile flag per gli accessi 
    $checkname = false;
    $checkmail = false;
    $checkage = false;
    $result = 'Accesso negato';

    // variabile per parametro get 'name'
    $name = $_GET['name'];
    // condizione per verificare l'accesso 
    if (strlen($name) > 3) {
        $checkname = true;
    };
    

    // variabile per parametro get 'email'
    $email = $_GET['email'];
    // condizione per verificare l'accesso 
    if ( strpos($email, '.') && strpos($email, '@') ) {
        $checkmail = true;
    }
    

    // variabile per parametro get 'age'
    $age = $_GET['age'];
    // condizione per verificare l'accesso 
    if ( is_numeric($age) ) {
        $checkage = true;
    };
    
    // verifica per tutti i parametri 
    if ($checkname && $checkmail && $checkage) {
        $result = 'Accesso riuscito';
    }

    echo($result);



?>