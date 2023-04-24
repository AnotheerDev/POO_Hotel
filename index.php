<h1> Exercice POO Hotel </h1>

<p> A partir de ces captures d’écran, réaliser l’application en POO
    permettant la gestion de réservations de chambres par des clients dans différents hôtels:</p>

<h2> Resultat </h2>


<?php

// façon plus rapide de faire ( autochargement des class) ça evite d'oublier des class sur des plus gros projets :
spl_autoload_register(function ($class_name) {
    require 'class/' . $class_name . '.php';
});


//Classe associative client > chambre > date de reservation :
// chainage pour aller chercher des infos " -> " :



// object de la class Client :
$MickaMurmann = new Client("Micka", "Murmann");
$VirgileGibello = new Client("Virgile", "Gibello");




// object de la class Hotel :
$HotelHilton = new Hotel("Hilton","****", "10  route de la Gare", "67000", "STRASBOURG");
$HotelRegent = new Hotel("Regent", "****","6 rue Pierre Demours", "75017", "PARIS" );