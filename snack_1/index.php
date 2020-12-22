<?php 
/* Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */

$matches = [
    'primo_match' => [
        "casa" => "Olimpia Milano",
        "fuori" => "Cantù",
        "punti_casa" => 55,
        "punti_trasferta" => 60
    ],
    'secondo_match' => [
        "casa" => "Virtus Bologna",
        "fuori" => "Vanoli Cremona",
        "punti_casa" => 70,
        "punti_trasferta" => 65
    ],
    'terzo_match' => [
        "casa" => "Sassari",
        "fuori" => "Reyer Venezia",
        "punti_casa" => 80,
        "punti_trasferta" => 57
    ],
    'quarto_match' => [
        "casa" => "Treviso",
        "fuori" => "Varese",
        "punti_casa" => 62,
        "punti_trasferta" => 70
    ]
];
?>

<div><?php foreach($matches as $match) {
    echo $match['casa'] . " - " . $match['fuori'] . " | " . $match['punti_casa'] . "-" . $match['punti_trasferta'] . "<br>";
} ?></div>