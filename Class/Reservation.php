<?php

class Reservation
{
   //Attributs :
   private Client $Clients;
   private Chambre $Chambres;
   private DateTime $DateEntree;
   private DateTime $DateSortie;


    public function __construct(Client $Clients, Chambre $Chambres, string $DateEntree, string $DateSortie)
    {
        $this->Clients = $Clients;
        $this->Chambres = $Chambres;
        $this->Clients = new DateTime($DateEntree);
        $this->Clients = new DateTime($DateSortie);
    }







        // getter et setter pour chaque attribut de ma class :
   public function getClients()
   {
      return $this->Clients;
   }

   public function setClients($Clients)
   {
      $this->Clients = $Clients;
   }

   public function getChambres()
   {
      return $this->Chambres;
   }

   public function setChambres($Chambres)
   {
      $this->Chambres = $Chambres;
   }

   public function getDateEntree()
   {
      return $this->DateEntree;
   }

   public function setDateEntree($DateEntree)
   {
      $this->DateEntree = $DateEntree;
   }
 
   public function getDateSortie()
   {
      return $this->DateSortie;
   }

   public function setDateSortie($DateSortie)
   {
      $this->DateSortie = $DateSortie;
   }


//    public function __toString()
//    {
//     return;
//    }
}