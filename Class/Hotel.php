<?php

class Hotel
{
    //Attributs:
    private string $nom;
    private string $etoile;
    private int $nbChambre;
    private string $adresse;
    private string $cp;
    private string $ville;




    public function __construct(string $nom, string $etoile, int $nbChambre, string $adresse, string $cp, string $ville)
    {
        $this->nom = $nom;
        $this->etoile = $etoile;
        $this->nbChambre = $nbChambre;
        $this->adresse = $adresse;
        $this->cp = $cp;
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

    public function getetoile()
    {
        return $this->etoile;
    }

    public function setEtoile($etoile)
    {
        $this->etoile = $etoile;
    }

    public function getNbChambre()
    {
        return $this->nbChambre;
    }

    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCd($cp)
    {
        $this->cp = $cp;
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
        return $this->nom . " " . $this->etoile . " " . $this->ville;
    }


    public function getInfoHotel()
    {
        $result = "<h2>$this</h2><br>"
            . "Nombre de chambres : $this->nbChambre <br>"
            . "Nombre de chambres réservées :  <br>"
            . "Nombre de chambres dispo :  <br>";
        echo $result;
    }
}
