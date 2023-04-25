<?php

class Chambre
{
    //Attributs :
    private string $numero;
    private string $nbLits;
    private int $prix;
    private bool $wifi;
    private bool $etat;
    private array $reservations;



    public function __construct(string $numero, string $nbLits, int $prix, bool $wifi, bool $etat)
    {
        $this->numero = $numero;
        $this->nbLits = $nbLits;
        $this->prix = $prix;
        $this->wifi = $wifi;
        $this->etat = $etat;
        $this->reservations = [];
    }




    // getter et setter pour chaque attribut de ma class :
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getNbLits()
    {
        return $this->nbLits;
    }

    public function setNbLits($nbLits)
    {
        $this->nbLits = $nbLits;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getWifi()
    {
        return $this->wifi;
    }

    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($etat)
    {
        $this->etat = $etat;
    }



    public function __toString()
    {
        return $this->numero . "(" . $this->nbLits . " lits - " . $this->prix . " € - " . " Wifi : " . $this->wifi . ")";
    }




    public function ajoutResa(Reservation $nouvelleResa)
    {
        $this->reservations[] = $nouvelleResa;
    }
}
