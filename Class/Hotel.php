<?php

class Hotel
{
    //Attributs:
    private string $nom;
    private string $etoile;
    private string $adresse;
    private string $cp;
    private string $ville;
    private array $reservations;
    private array $chambres;





    public function __construct(string $nom, string $etoile, string $adresse, string $cp, string $ville)
    {
        $this->nom = $nom;
        $this->etoile = $etoile;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->reservations = [];
        $this->chambres = [];
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


    public function ajoutChambre( Chambre $nouvelleChambre)
    {
        $this->chambres[] = $nouvelleChambre;
    }


    public function __toString()
    {
        return $this->nom . " " . $this->etoile . " " . $this->ville;
    }

    public function ajoutResa(Reservation $nouvelleResa)
    {
        $this->reservations[] = $nouvelleResa;
    }
    

    public function calculNbReservees()
    {
        $count = 0;
        foreach ($this->reservations as $reservation) {
            if ($reservation->getChambre()->getEtat()) {
                $count++;
            }
        }
        return $count;
    }


    public function calculNbChambresDispo()
    {
        $result = count($this->chambres) - $this->calculNbReservees();
        return $result;
    }


    public function getInfoHotel()
    {
        $result = "<h2>$this</h2><br>"
            . $this->adresse . " " . $this->ville ."<br>"
            . "Nombre de chambres : ".count($this->chambres) ."<br>"
            . "Nombre de chambres réservées : ".$this->calculNbReservees()." <br>"
            . "Nombre de chambres dispo : ".$this->calculNbChambresDispo()."  <br>";
            echo $result;
        }
        
        
    public function getInfoResaHotel()
    {
        if (count($this->reservations) === 0) {
            echo "<h2>Réservations au $this</h2><br>";
            echo "Pas de réservation <br>";
        } else {
            $result = "<h2>Réservations au $this</h2><br>";
            foreach ($this->reservations as $resa) {
                $result .= $resa . "<br>";
            }
                echo $result;
        }
    }
    
    
    
}