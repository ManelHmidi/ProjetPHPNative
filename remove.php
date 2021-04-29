<?php
session_start();
$email = $_SESSION["email"];


$idProduit = htmlentities(trim($_GET['idProduit']));
$idProduit = (int) $idProduit;

$link = mysqli_connect('localhost', 'root','','projetweb');

	$req = "DELETE FROM `produit` WHERE idProduit = '$idProduit'";
		mysqli_query($link, $req);
		echo "Ligne Effectuée";

    $idReq = "select * from `utilisateur` where email ='$email'";
    $id = mysqli_query($link, $idReq);

    while ($result = mysqli_fetch_assoc($id)) {
    	$_SESSION['message']="Produit supprimé avec succès !!";
        header('location:profil.php?idUser='.$result["idUser"]);
    }   

?> 
