<?php

class Reservation
{
   //Attributs :
   private Client $client;
   private Chambre $chambre;
   private DateTime $dateEntree;
   private DateTime $dateSortie;


   public function __construct(Client $client, Chambre $chambre, string $dateEntree, string $dateSortie)
   {
      $this->client = $client;
      $this->chambre = $chambre;
      $this->dateEntree = new DateTime($dateEntree);
      $this->dateSortie = new DateTime($dateSortie);
      $this->client->ajoutResa($this);
      $this->chambre->ajoutResa($this);
   }







   // getter et setter pour chaque attribut de ma class :
   public function getClient()
   {
      return $this->client;
   }

   public function setClient($client)
   {
      $this->client = $client;
   }

   public function getChambre()
   {
      return $this->chambre;
   }

   public function setChambres($chambre)
   {
      $this->chambre = $chambre;
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
      return $this->client . " " . $this->chambre;
   }
}
