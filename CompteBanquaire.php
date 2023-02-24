<?php

class CompteBanquaire
{
    private string $libelle;
    private float $solde;
    private string $deviseMonetaire;
    private Titulaire $titulaire;
    private float $virementSomme;

    public function __construct($libelle, $solde, $deviseMonetaire, $titulaire)
    {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->deviseMonetaire = $deviseMonetaire;
        $this->titulaire = $titulaire;
        $titulaire->ajouterUnCompte($this);
        $this->virementSomme = 0;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
        echo $this->libelle."<br>";
    }
    public function getLibelle()
    {
        echo $this->libelle;
    }
    public function setSolde($solde)
    {
        $this->solde = $solde;
        echo $this->solde."<br>";
    }
    public function getSolde()
    {
        echo $this->solde."<br>";
    }
    public function setDeviseMonetaire($deviseMonetaire)
    {
        $this->deviseMonetaire = $deviseMonetaire;
        echo $this->deviseMonetaire."<br>";
    }
    public function getDeviseMonetaire()
    {
        echo $this->deviseMonetaire."<br>";
    }
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;
        echo $this->titulaire."<br>";
    }
    public function getTitulaire()
    {
        echo $this->titulaire."<br>";
    }
    public function getInfos()
    {
        echo "Titulaire: $this->titulaire";
        echo "Libellé: $this->libelle<br>";
        echo "Solde: $this->solde<br>";
        echo "Devise monetaire: $this->deviseMonetaire<br>";
    }
    public function crediter($virementSomme)
    {
        $this->solde = $this->solde + $virementSomme;
    }
    public function debiter($virementSomme)
    {
        $this->solde = $this->solde - $virementSomme;
    }
    public function virement($virementSomme, $destinataire)
    {
        if($virementSomme <= $this->solde)
        {
            $destinataire->crediter($virementSomme);
            $this->debiter($virementSomme);
            echo "Virement effectuer<br>";
        }
        else
        {
            echo "Echec solde insuffisant <br>";
        }
    }
    public function __toString()
    {
        return $this->libelle." ".$this->solde." ".$this->deviseMonetaire."<br>";
    }
}