<?php 
/*Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri.
2. che mail contenga un punto e una chiocciola.
3. che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
?>

<h1><?php 
if((strlen($name) > 3) && strpos($mail, ".") && strpos($mail, "@") && (is_numeric($age))) {
    echo "Accesso riuscito";
}else {
    echo "Accesso negato";
}
?></h1>