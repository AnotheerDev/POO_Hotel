<?php

class Client
{
    //Attributs
    private string $nom;
    private string $prenom;
    private array $reservations;


    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservations = [];
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

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function __toString()
    {
        return $this->nom . " " . $this->prenom;
    }


    public function ajoutResa(Reservation $nouvelleResa)
    {
        $this->reservations[] = $nouvelleResa;
    }

    public function getInfoResaClient()
    {
        $result = "<h2>Réservations de $this</h2><br>";
        $solde = 0;
        foreach ($this->reservations as $resa) {
            $result .= $resa . "<br>";
            $solde += $resa->getPrix() ;
        }
        $result .= "Total : $solde <br>";
        echo $result;
    }



    // initialiser un count à 0 
    // a chaque boucle on fait le calcul du sejour qu'on ajoute au suivant jusqu'a avoir le total




    // foreach ($this->reservations as $resa => $prix) {
    //     $prix_total = $prix * $this->Reservation->getNuitResa;
    //     $total += $prix_total;
    //     echo "Total : " . $prix_total . "€<br>";
    // }

}
