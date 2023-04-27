<?php




echo "*****************************************\n";
echo "Tableau périodique des éléments chimiques\n";
echo "*****************************************\n\n";


// Définition du tableau associatif
$tableau = array(
    "H" => "Hydrogène",
    "He" => "Hélium",
    "P" => "Phosphore",
    "v" => "Vanadium",
    "Pb" => "Plomb",
    "I" => "Iode",
    "Кг" => "Krypton",
    "X" => "Xénon",
    "Rn" => "Radon",
    "Zr" => "Zirconium"
);

// Affichage du tableau non trié
foreach ($tableau as $symbole => $nom) {
    echo $symbole . " : " . $nom . "\n";
}

echo "***************************" . "\n";

// Tri du tableau associatif par ordre alphabétique des symboles
ksort($tableau);

// Affichage du tableau trié
foreach ($tableau as $symbole => $nom) {
    echo $symbole . " : " . $nom . "\n";
}



?>
