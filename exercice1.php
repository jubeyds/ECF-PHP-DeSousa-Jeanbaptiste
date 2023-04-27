<?php

echo "********************\n";
echo "CALCUL SUR LE CERCLE\n";
echo "********************\n\n";

do {
  
  
  $rayon = readline("Quel est le rayon du cercle : ");
  $circonference = round(2 * pi() * $rayon, 2);
  $surface = round(pi() * pow($rayon, 2), 2);
  
  echo "Sa circonférence est de : " . $circonference . "\n";
  echo "Sa surface est : " . $surface . "\n\n";
  
  $reponse = readline("Voulez-vous faire un autre calcul (O/N) : " . "\n");
  echo "\n";

  
} while ($reponse === 'O');

echo "\nAu revoir à bientôt.\n";







?>

