<?php

require('CompteBanquaire.php');
require('Titulaire.php');


$t1 = new Titulaire("Mystere", "Martin", "2000-03-03", "Vice City");
$c1 = new CompteBanquaire("compte courant", 3000, "Euros", $t1);
$c2 = new CompteBanquaire("compte epargne", 100, "Euros", $t1);

$c1->virement(700, $c2);


$c1->getSolde();
$c2->getSolde();

$t1->afficherUnCompte();