<?php


echo "************************************* \n";
echo "Racine de l'équation du 2nd degré\n";
echo "Y = ax² + bx + c\n";
echo "************************************* \n";


do {
    echo "\nQuelle est la valeur de a : ";
    $a = readline();
    echo "Quelle est la valeur de b : ";
    $b = readline();
    echo "Quelle est la valeur de c : ";
    $c = readline();

    $delta = $b ** 2 - 4 * $a * $c;

    if ($delta < 0) {
        echo "\nL'équation ne possède pas de racine réelle\nDelta = $delta\n";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "\nL'équation possède une racine double :\nDelta = $delta\nX1 = X2 = $x\n";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "\nL'équation possède 2 racines distinctes :\nDelta = $delta\nL'équation s'annule pour : \nX1 = $x1\nX2 = $x2\n";
    }

    echo "\nVoulez-vous continuer ? (o/n) : ";
    $rep = readline();
} while ($rep == 'o');

echo "\nAu revoir et à bientôt !\n";




?>



