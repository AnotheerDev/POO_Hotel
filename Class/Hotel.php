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


    public function ajoutChambre(Chambre $nouvelleChambre)
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





    // ------------ implémenter le html pour le rendu ---------------


    public function getInfoHotel()
    {
        $result = "<h2>$this</h2><br>"
            . $this->adresse . " " . $this->ville . "<br>"
            . "Nombre de chambres : " . count($this->chambres) . "<br>"
            . "Nombre de chambres réservées : " . $this->calculNbReservees() . " <br>"
            . "Nombre de chambres dispo : " . $this->calculNbChambresDispo() . "  <br>";
        echo $result;
    }





    // ------------ implémenter le html pour le rendu ---------------


    public function getInfoResaHotel()
    {

        if (count($this->reservations) === 0) {
            echo "<h2>Réservations au $this</h2><br>";
            echo "Pas de réservation <br>";
        } else {
            $result = "<h2>Réservations au $this</h2><br>";
            $nbReservations = count($this->reservations);
            $result .= "<p><span class='nb-reservations'>$nbReservations RESERVATION" . ($nbReservations > 1 ? "S" : "") . "</span></p>";
            foreach ($this->reservations as $resa) {
                $result .= $resa . "<br>";
            }
            echo $result;
        }
    }



    // Avece cette fonction je dois faire resortir le tableau comme sur l'exemple de l'exo


    public function afficherTableauResa()
    {
?>
        <strong>
            <h1> Status des chambres de <?= $this ?></h1>
        </strong>
        <table>
            <thead>
                <tr>
                    <th>Chambre</th>
                    <th>Prix</th>
                    <th>Wifi</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($this->chambres as $chambre) {
                    $etat = $chambre->getEtat() ? '<span class="etat-disponible">disponible</span>' : '<span class="etat-reservee">réservée</span>';
                ?> <tr>
                        <td><?php echo "Chambre " . $chambre->getNumero() ?></td>
                        <td><?php echo $chambre->getPrix() . "€" ?></td>
                        <td><?php if ($chambre->getWifi())
                                echo '&#128246;' ?></td>
                        <td><?= $chambre->getEtat() ? '<span class="etat-disponible">disponible</span>' : '<span class="etat-reservee">réservée</span>' ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    }
}
