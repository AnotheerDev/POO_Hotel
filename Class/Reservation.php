<?php

class Reservation
{
   //Attributs :
   private Client $clients;
   private Chambre $chambres;
   private DateTime $dateEntree;
   private DateTime $dateSortie;


   public function __construct(Client $clients, Chambre $chambres, string $dateEntree, string $dateSortie)
   {
      $this->clients = $clients;
      $this->chambres = $chambres;
      $this->dateEntree = new DateTime($dateEntree);
      $this->dateSortie = new DateTime($dateSortie);
      $this->clients->ajoutResa($this);
      $this->chambres->ajoutResa($this);
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

   public function getChambres()
   {
      return $this->chambres;
   }

   public function setChambres($chambres)
   {
      $this->chambres = $chambres;
   }

   public function getDateEntree()
   {
      return $this->dateEntree;
   }

   public function setDateEntree($dateEntree)
   {
      $this->dateEntree = $dateEntree;
   }

   public function getDateSortie()
   {
      return $this->dateSortie;
   }

   public function setDateSortie($dateSortie)
   {
      $this->dateSortie = $dateSortie;
   }



   public function __toString()
   {
      return $this->clients . " " . $this->chambres;
   }



   // public function getInfoResaHotel()
   // {
   //    $result = "<h2>Réservations de $this</h2><br>";
   //    foreach ($this->client as $client) {
   //       $result .= $client . "<br>";
   //    }
   //    echo $result; 
   // }
}
