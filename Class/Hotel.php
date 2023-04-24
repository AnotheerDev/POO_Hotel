<?php

class Hotel
{
        //Attributs:
    private string $Nom;
    private string $Etoile;
    private string $Adresse;
    private string $Cd;
    private string $Ville;



//tableau de chambre
    public function __construct(string $Nom, string $Etoile, string $Adresse, string $Cd, string $Ville)
    {
        $this->Nom = $Nom;
        $this->Etoile = $Etoile;
        $this->Adresse = $Adresse;
        $this->Cd = $Cd;
        $this->Ville = $Ville;
    }

        // getter et setter pour chaque attribut de ma class :
    public function getNom()
    {
        return $this->Nom;
    }

    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    public function getEtoile()
    {
        return $this->Etoile;
    }

    public function setEtoile($Etoile)
    {
        $this->Etoile = $Etoile;
    }

    public function getAdresse()
    {
        return $this->Adresse;
    }

    public function setAdresse($Adresse)
    {
        $this->Adresse = $Adresse;
    }

    public function getCd()
    {
        return $this->Cd;
    }

    public function setCd($Cd)
    {
        $this->Cd = $Cd;
    }

    public function getVille()
    {
        return $this->Ville;
    }

    public function setVille($Ville)
    {
        $this->Ville = $Ville;
    }



    public function __toString()
    {
        return $this->Nom;
    }
}