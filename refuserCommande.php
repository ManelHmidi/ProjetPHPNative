<?php
session_start();

$idProduit = htmlentities(trim($_GET['idProduit']));
$idProduit = (int) $idProduit;

$email = $_SESSION["email"];
$idCorrespond = $_SESSION["idCorrespond"];

$link = mysqli_connect('localhost', 'root','','projetweb');

	$req = "UPDATE `commande` 
			SET etat = 'Refused'
			WHERE idProduit = '$idProduit'
			AND idCorrespond ='$idCorrespond'";

    mysqli_query($link, $req);
	$_SESSION['message']="Commande Réfusé! Tu peux la consulter en historique !!";
    header('location:Reponses.php');

?>
