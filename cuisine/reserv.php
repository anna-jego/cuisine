<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=cuisine;charset=utf8', 'non-root', '123');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
        die('Erreur : ' . $e->getMessage());
}


 if ($_SERVER["REQUEST_METHOD"] == "POST") {

 	$nom = $_POST["nom"];
 	echo "ton nom est : " . $nom;

	$prenom = $_POST["prenom"];
	echo "ton Prénom est : " . $prenom;

	$numéro = $_POST["numero"];
	echo "ton nom est : " . $numero;

	$mail = $_POST["mail"];
	echo "ton email est : " . $mail;

	$adresse = $_POST["adresse"];
	echo "tu as choisi de venir le : " . $adresse;

	$date = $_POST["date"];
	echo "ton adresse est : " . $date;
}
