<?php

class Hotel
{
    //Attributs:
    private string $nom;
    private string $etoile;
    private string $adresse;
    private string $cd;
    private string $ville;


    public function __construct(string $nom, string $etoile, string $adresse, string $cd, string $ville)
    {
        $this->nom = $nom;
        $this->etoile = $etoile;
        $this->adresse = $adresse;
        $this->cd = $cd;
        $this->ville = $ville;
    }

        // getter et setter pour chaque attribut de ma class :

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEtoile()
    {
        return $this->etoile;
    }

    public function setEtoile($etoile)
    {
        $this->etoile = $etoile;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getCd()
    {
        return $this->cd;
    }

    public function setCd($cd)
    {
        $this->cd = $cd;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function __toString()
    {
        return $this->nom;
    }
}