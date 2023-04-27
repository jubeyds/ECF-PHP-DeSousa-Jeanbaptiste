<?php



echo "********************************\n";
echo "Tableau Aléatoire de 10 éléments\n";
echo "********************************\n\n";


// Déclaration du tableau aléatoire de 10 éléments
$tab1 = [];
for ($i = 0; $i < 10; $i++) {
    $tab1[$i] = rand(20, 100);
}

// Affichage du tableau
echo "Tableau initial: " . "\n";
print_r($tab1);

// Menu de choix
do {
    echo "\nQue souhaitez-vous faire?\n";
    echo "0. Quitter\n";
    echo "1. Trier le tableau en ordre croissant et l'afficher\n";
    echo "2. Trier le tableau en ordre décroissant et l'afficher\n";
    echo "3. Additionner chaque élément du tableau 1 et 2 dans tableau 3\n";
    echo "4. Inverser le troisième tableau et l'afficher\n";
    $choice = readline("Entrez votre choix: ");

    switch ($choice) {
        case 0:
            echo "Au revoir!";
            break;
        case 1:
            sort($tab1);
            echo "Tableau trié en ordre croissant: " . "\n";
            print_r($tab1);
            break;
        case 2:
            rsort($tab1);
            echo "Tableau trié en ordre décroissant: " . "\n";
            print_r($tab1);
            break;
        case 3:
            // Déclaration du deuxième tableau aléatoire de 10 éléments
            $tab2 = [];
            for ($i = 0; $i < 10; $i++) {
                $tab2[$i] = rand(20, 100);
            }

            // Addition des éléments des deux tableaux dans un troisième tableau
            $tab3 = [];
            for ($i = 0; $i < 10; $i++) {
                $tab3[$i] = $tab1[$i] + $tab2[$i];
            }

            echo "Tableau 1: " . "\n";
            print_r($tab1);
            echo "Tableau 2: " . "\n";
            print_r($tab2);
            echo "Tableau 3 (addition des éléments de tableaux 1 et 2): " . "\n";
            print_r($tab3);
            break;
        case 4:
            if (!isset($tab3)) {
                echo "Le tableau 3 n'existe pas encore! Veuillez choisir l'option 3 avant.\n";
            } else {
                $tab3_reversed = array_reverse($tab3);
                echo "Tableau 3 inversé: " . "\n";
                print_r($tab3_reversed);
            }
            break;
        default:
            echo "Choix invalide! Veuillez choisir une option valide.\n";
    }
} while ($choice != 0);



?>