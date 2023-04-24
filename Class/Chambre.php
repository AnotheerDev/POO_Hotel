<?php

class Chambre
{
        //Attributs :
    private string $Numero;
    private string $NbLits;
    private int $Prix;
    private bool $Wifi;
    private bool $Etat;



    public function __construct(string $Numero, string $NbLits, int $Prix, bool $Wifi, bool $Etat)
    {
        $this->Numero = $Numero;
        $this->NbLits = $NbLits;
        $this->Prix = $Prix;
        $this->Wifi = $Wifi;
        $this->Etat = $Etat;
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

    public function getEtat()
    {
        return $this->Etat;
    }


    public function setEtat($Etat)
    {
        $this->Etat = $Etat;
    }



    public function __toString()
    {
        return $this->Numero;
    }
}