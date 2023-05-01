<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style.css">
</head>

</html>




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
// creer tableau de chambre : fait
// creer methode afficher chambre dans hotel pour le tableau html :
// creer une définition de Class et l'expliquer qu'est ce qu'un attribut ??? une méthode ?? un objet ?? le chainage ??

// Définition d'une classe :
// une classe possède des attributs ou variables d'instances
// ces aatributs nous servent à créer un objet à l'aide de la fonction __construct
// chaque attribut à un getter et setter 
// le getter permet de récuperer l'info de l'attribut
// le setter permet de modifier à la volée l'attribut





// Définition d'une classe :

// Une classe en programmation orientée objet (POO) est un modèle ou une représentation abstraite d'un concept ou d'un objet du monde réel. Elle définit les propriétés et les comportements (méthodes) communs à tous les objets appartenant à cette classe.
// En d'autres termes, une classe peut être considérée comme un moule ou un plan de construction pour créer des objets qui ont des caractéristiques et des comportements similaires. Les objets créés à partir d'une classe sont appelés des instances de cette classe.

// les méthodes magiques sont également des méthodes spéciales qui ont un nom particulier, commençant et finissant par deux underscores. Elles permettent de personnaliser le comportement d'une classe en réponse à certains événements, tels que la création d'une instance de la classe, l'accès à des propriétés, l'appel de méthodes
// exemple de méthodes magiques:

// __construct() : méthode appelée lors de la création d'une nouvelle instance de la classe.
// __toString() : méthode appelée par la fonction echo ou print pour obtenir une représentation en chaîne de caractères de l'objet. Généralement on y met des infos pratiques qu'on peut utiliser facilement 
// get($name) : méthode appelée lorsqu'une propriété inaccessible(private ou protected) est accédée en lecture.
// set($name) : méthode appelée lorsqu'une propriété inaccessible(private ou protected) est assignée une valeur.















// objet de la class Hotel :
$hotelHilton = new Hotel("Hilton", "****", "10 route de la Gare", "67000", "STRASBOURG");
$hotelRegent = new Hotel("Regent", "****", "6 rue Pierre Demours", "75017", "PARIS");



// objet de la class Chambre :
$chambre1 = new Chambre("1", "2", 120, false, true, $hotelHilton);
$chambre2 = new Chambre("2", "2", 120, false, true, $hotelHilton);
$chambre3 = new Chambre("3", "2", 120, false, true, $hotelHilton);
$chambre4 = new Chambre("4", "2", 120, false, true, $hotelHilton);
$chambre16 = new Chambre("16", "3", 300, true, true, $hotelHilton);
$chambre17 = new Chambre("17", "3", 300, true, true, $hotelHilton);
$chambre18 = new Chambre("18", "3", 300, true, true, $hotelHilton);
$chambre19 = new Chambre("19", "3", 300, true, true, $hotelHilton);



// objet de la class Client :
$mickaMurmann = new Client("Micka", "Murmann");
$virgileGibello = new Client("Virgile", "Gibello");







// objet de la class Reservation : 
$resaMicka1 = new Reservation($mickaMurmann, $chambre3, "11-03-2021", "15-03-2021");
$resaMicka2 = new Reservation($mickaMurmann, $chambre4, "01-04-2021", "17-04-2021");
$resaVirgile = new Reservation($virgileGibello, $chambre17, "01-01-2021", "01-01-2021");







$hotelHilton->getInfoHotel();
echo "-------------------------------------------<br>";
$hotelHilton->getInfoResaHotel();
echo "-------------------------------------------<br>";
$hotelRegent->getInfoResaHotel();
echo "-------------------------------------------<br>";
$mickaMurmann->getInfoResaClient();
echo "-------------------------------------------<br>";
echo $hotelHilton->afficherTableauResa();
