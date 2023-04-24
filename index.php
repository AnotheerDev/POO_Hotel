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
// ajouter les objets chambres et reservations dans l'index : a faire


// objet de la class Chambre :
$chambre1 = new Chambre ("1", "1", "120", "false", "true");






// objet de la class Reservation : 





// objet de la class Client :
$mickaMurmann = new Client("Micka", "Murmann");
$virgileGibello = new Client("Virgile", "Gibello");




// objet de la class Hotel :
$hotelHilton = new Hotel("Hilton","****", "10  route de la Gare", "67000", "STRASBOURG");
$hotelRegent = new Hotel("Regent", "****","6 rue Pierre Demours", "75017", "PARIS" );


