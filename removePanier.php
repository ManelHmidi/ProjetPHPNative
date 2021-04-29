<?php

session_start();
$email = $_SESSION["email"];


$idProduit = htmlentities(trim($_GET['idProduit']));
$idProduit = (int) $idProduit;

$link = mysqli_connect('localhost', 'root','','projetweb');


$req = "DELETE FROM `panier` 
		WHERE idProduit = '$idProduit' and idCorrespond = (select idCorrespond
		from `paniercorrespond` where idUser  =(select idUser 
        from utilisateur where email = '$email'))";
		mysqli_query($link, $req);
		$_SESSION['message']="Produit effacé !!";
header("location:".  $_SERVER['HTTP_REFERER']); 


?> 