<?php

class Reservation
{
   //Attributs :
   private Client $clients;
   private Chambre $chambre;
   private DateTime $dateEntree;
   private DateTime $dateSortie;





   public function __construct(Client $clients, Chambre $chambre, string $dateEntree, string $dateSortie)
   {
      $this->clients = $clients;
      $this->chambre = $chambre;
      $this->dateEntree = new DateTime($dateEntree);
      $this->dateSortie = new DateTime($dateSortie);
      $this->clients->ajoutResa($this);
      $this->chambre->ajoutResa($this);
      $this->chambre->getHotel()->ajoutResa($this);
   }







   // getter et setter pour chaque attribut de ma class :
   public function getClients()
   {
      return $this->clients;
   }

   public function setClients($clients)
   {
      $this->clients = $clients;
   }

   public function getChambre()
   {
      return $this->chambre;
   }

   public function setChambre($chambre)
   {
      $this->chambre = $chambre;
   }

   public function getDateEntree()
   {
      return $this->dateEntree->format('d-m-Y');
   }

   public function setDateEntree($dateEntree)
   {
      $this->dateEntree = $dateEntree;
   }

   public function getDateSortie()
   {
      return $this->dateSortie->format('d-m-Y');
   }

   public function setDateSortie($dateSortie)
   {
      $this->dateSortie = $dateSortie;
   }


   public function __toString()
   {
      return $this->clients . " " . $this->chambre;
   }



   public function ajoutResa(Reservation $nouvelleResa)
   {
      $this->clients[] = $nouvelleResa;
   }

   // calcule le nombre de nuit par réservation :
   public function getNuitResa()
   {
      $dateEntree = ($this->dateEntree);
      $dateSortie = ($this->dateSortie);
      $nuitResa = $dateEntree->diff($dateSortie);
      $nuitResa = $nuitResa->days;
      return $nuitResa;
   }

   // fonction qui multiplie le prix de la chambre par getNuitResa()
   public function getPrix()
   {
      return $this->getChambre()->getPrix() * $this->getNuitResa();
   }
}
