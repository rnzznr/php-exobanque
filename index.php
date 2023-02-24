<?php

require('CompteBanquaire.php');
require('Titulaire.php');

$t1 = new Titulaire("ghetto", "fabulous", "2004-05-02", "mulhouse");
$c1 = new CompteBanquaire("compte courant", 17534, "Euros", $t1);
$c2 = new CompteBanquaire("compte epargne", 1648, "Euros", $t1);

$c1->virement(5651, $c2);

$c1->getSolde();
$c2->getSolde();

$t1->afficherUnCompte();