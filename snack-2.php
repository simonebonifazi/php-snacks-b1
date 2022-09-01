<!-- Passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione) 
 che name sia più lungo di 3 caratteri, che mail contenga
  un punto e una chiocciola e che age sia un numero.
   Se tutto è ok stampare “Accesso riuscito”,
    altrimenti “Accesso negato”; -->

<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';

//validation name
$is_name_true = mb_strlen($name) > 3;
//validation email
$is_email_good = strpos($email, '0') && strpos($email, '.');
//validation age
$is_age_number = is_numeric($age);

//print on page
if(!$is_name_true || $is_email_good || $is_age_number){
echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
};

?>