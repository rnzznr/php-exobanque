<?php

class Titulaire
{
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private string $ville;
    private array $comptes;

    public function __construct($nom, $prenom, $dateDeNaissance, $ville)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
        $this->ville = $ville;
        $this->comptes = [];
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        echo $this->nom."<br>";
    }
    public function getNom()
    {
        echo $this->nom."<br>";
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        echo $this->prenom."<br>";
    }
    public function getPrenom()
    {
        echo $this->prenom."<br>";
    }
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
        echo $this->dateDeNaissance."<br>";
    }
    public function getDateDeNaissance()
    {
        echo $this->dateDeNaissance."<br>";
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
        echo $this->ville."<br>";
    }
    public function getVille()
    {
        echo $this->ville."<br>";
    }
    public function getInfos()
    {
        echo "Nom et prénom: $this->nom $this->prenom <br>";
        echo "Date de naissance: $this->dateDeNaissance<br>";
        echo "Ville: $this->ville<br>";
        echo "Ensemble de compte: ".count($this->comptes)."<br>";
    }
    public function ajouterUnCompte(CompteBanquaire $compte)
    {
        $this->comptes[] = $compte;
    }
    public function afficherUnCompte()
    {
        foreach ($this->comptes as $compte)
        {
            echo $compte."<br>";
            
        }
    }
    public function __toString()
    {
        $this->dateDeNaissance = $this->dateDeNaissance->format('Y-m-d');
        return "$this->nom $this->prenom $this->dateDeNaissance $this->ville<br>";
    }
}