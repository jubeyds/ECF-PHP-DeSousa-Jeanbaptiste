<?php

echo "*******" . "   Table de Multiplication   " . "*******" . "\n";


do {
    // Demander à l'utilisateur d'entrer un nombre
    $nombre = readline("Entrez un nombre : ");
    
    // Afficher la table de multiplication
    for ($i = 1; $i <= 10; $i++) {
        echo $nombre . " x " . $i . " = " . ($nombre * $i) . "\n";
    }
    
    // Demander à l'utilisateur s'il veut continuer
    $reponse = readline("Voulez-vous continuer ? (O/N) ");
} while ($reponse === "O");



echo "Au revoir à bientôt.\n";



?>