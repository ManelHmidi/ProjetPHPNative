<?php

session_start();

$idProduit = htmlentities(trim($_GET['idProduit']));
$idProduit = (int) $idProduit;


$link = mysqli_connect('localhost', 'root','','projetweb');


$image = $_POST['image'];
$image = addslashes ( $image );
$nomProduit = $_POST['nomProduit'];
$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
$sexe = $_POST['sexe'];
$categorie = $_POST['categorie'];

$req = "select * from `produit` where idProduit ='$idProduit'";
$row = mysqli_query($link, $req);

while ($result = mysqli_fetch_assoc($row)) {
    $idUser=$result["idUser"];
    $img=$result["image"];
    //$img = addslashes ( $img );
    $sex=$result["sexe"];
    $categ=$result["categorie"];
}

if ($image =="") {
	$image = $img;
}

if ($sexe =="") {
	$sexe = $sex;
}

if ($categorie =="") {
	$categorie = $categ;
}


	$reg = "UPDATE produit
			SET image = '$image', nomProduit = '$nomProduit', prix = '$prix', libelle = '$libelle', sexe= '$sexe', categorie = '$categorie'
			WHERE idProduit = '$idProduit'";
		mysqli_query($link, $reg);
		$_SESSION['message']="Les modifications sont mis à jours avec succès !!";

        header('location:profil.php?idUser='.$idUser);

?>