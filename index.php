<h1> Exercice POO Hotel </2>

<p> A partir de ces captures d’écran, réaliser l’application en POO
    permettant la gestion de réservations de chambres par des clients dans différents hôtels:</p>

<h2> Resultat </2>


<?php

// façon plus rapide de faire ( autochargement des class) ça evite d'oublier des class sur des plus gros projets :
spl_autoload_register(function ($class_name) {
    require 'class/' . $class_name . '.php';
});



// object de la class Client :
$MickaMurmann = new Client("Micka", "Murmann");




// object de la class Hotel :
$HotelHilton = new Hotel("Hilton","****", "10  route de la Gare", "67000", "STRASBOURG");