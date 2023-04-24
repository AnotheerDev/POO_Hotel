<?php

class Chambre
{
    //Attributs :
    private string $Numero;
    private string $NbLits;
    private int $Prix;
    private bool $Wifi;
    private DateTime $Reservation;

// bool etat 

    public function __construct(string $Numero, string $NbLits, int $Prix, bool $Wifi, string $Reservation)
    {
        $this->Numero = $Numero;
        $this->NbLits = $NbLits;
        $this->Prix = $Prix;
        $this->Wifi = $Wifi;
        $this->Reservation = new DateTime($Reservation);
    }


    

        // getter et setter pour chaque attribut de ma class :
    public function getNumero()
    {
        return $this->Numero;
    }

    public function setNumero($Numero)
    {
        $this->Numero = $Numero;
    }

    public function getNbLits()
    {
        return $this->NbLits;
    }

    public function setNbLits($NbLits)
    {
        $this->NbLits = $NbLits;
    }

    public function getPrix()
    {
        return $this->Prix;
    }

    public function setPrix($Prix)
    {
        $this->Prix = $Prix;
    }


    public function getWifi()
    {
        return $this->Wifi;
    }

    public function setWifi($Wifi)
    {
        $this->Wifi = $Wifi;
    }

    public function getReservation()
    {
        return $this->Reservation;
    }


    public function setReservation($Reservation)
    {
        $this->Reservation = $Reservation;
    }



    public function __toString()
    {
        return $this->Numero;
    }
}