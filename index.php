<h1> Exercice POO Hotel </h1>

<p> A partir de ces captures d’écran, réaliser l’application en POO
    permettant la gestion de réservations de chambres par des clients dans différents hôtels:</p>

<h2> Resultat </h2>


<?php

// façon plus rapide de faire ( autochargement des class) ça evite d'oublier des class sur des plus gros projets :
spl_autoload_register(function ($class_name) {
    require 'class/' . $class_name . '.php';
});


// Classe associative client > chambre > date de reservation : fait
// chainage pour aller chercher des infos " -> " :
// ajouter les objets chambres et reservations dans l'index : fait


// objet de la class Hotel :
$hotelHilton = new Hotel("Hilton", "****", 30, "10 route de la Gare", "67000", "STRASBOURG");
$hotelRegent = new Hotel("Regent", "****", 25, "6 rue Pierre Demours", "75017", "PARIS");



// objet de la class Chambre :
$chambre1 = new Chambre("1", "2", 120, "false", "true");
$chambre2 = new Chambre("2", "2", 120, "false", "true");
$chambre3 = new Chambre("3", "2", 120, "false", "true");
$chambre4 = new Chambre("4", "2", 120, "false", "true");
$chambre16 = new Chambre("16", "3", 300, "true", "true");
$chambre17 = new Chambre("17", "3", 300, "true", "true");
$chambre18 = new Chambre("18", "3", 300, "true", "true");
$chambre19 = new Chambre("19", "3", 300, "true", "true");



// objet de la class Client :
$mickaMurmann = new Client("Micka", "Murmann");
$virgileGibello = new Client("Virgile", "Gibello");







// objet de la class Reservation : 
$resaMicka1 = new Reservation($mickaMurmann, $chambre3, "11-03-2021", "15-03-2021");
$resaMicka2 = new Reservation($mickaMurmann, $chambre4, "01-04-2021", "17-04-2021");
$resaVirgile = new Reservation($virgileGibello, $chambre17, "01-01-2021", "01-01-2021");







$hotelHilton->getInfoHotel();
echo "-------------------------------------------<br>";
$chambre1;
echo "-------------------------------------------<br>";
$mickaMurmann->getInfoResaClient();
echo "-------------------------------------------<br>";
$hotelHilton->getInfoResaHotel();