<h1>Crédit Mutuel Bonjour !</h1>


<?php
require "Compte.php";
require "Titulaire.php";

$t1 = new Titulaire("David","DE SANTES", new DateTime("1997/09/16"), "Strasbourg"); 
$c1 = new Compte("Compte courant - N°78945",1852.56, "€", $t1);
$c2 = new Compte("Livret A - N°78452", 2554.36, "€", $t1);

echo $t1;
$t1->displayCompte();
echo "<br><br><br>".$c1;

$c1->virement(100, $c2);

echo "<br><br><br>".$c1;

echo "<br><br><br>".$c2;

