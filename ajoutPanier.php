<?php

session_start();

$link = mysqli_connect('localhost', 'root','','projetweb');
$email = $_SESSION["email"];

$idProduit = htmlentities(trim($_GET['idProduit']));
$idProduit = (int) $idProduit;

$req = "select * from `utilisateur` where email ='$email'";
$user = mysqli_query($link, $req);

while ($result = mysqli_fetch_assoc($user)) {
	$idUser = $result["idUser"];
}

$req = "select * from `paniercorrespond` where idUser ='$idUser'";
$user = mysqli_query($link, $req);

while ($result = mysqli_fetch_assoc($user)) {
	$idCorrespond = $result["idCorrespond"];
}

$tester = " select * from `panier` where idProduit = '$idProduit' and idCorrespond ='$idCorrespond' ";
$jeTeste = mysqli_query($link, $tester);
$num =mysqli_num_rows($jeTeste);
if ($num == 1) {
		$_SESSION['error'] = "Produit déja au panier!!";

}else{

$verif="select * from produit where idProduit ='$idProduit'";
$veerif = mysqli_query($link, $verif);
while ($ind = mysqli_fetch_assoc($veerif)) {
	$idVendeur = $ind["idUser"];
}

if ($idUser != $idVendeur) {
	$inserer = "insert into panier(idCorrespond, idProduit)
	 		values ('$idCorrespond', '$idProduit')";
	mysqli_query($link, $inserer);
	$_SESSION['message']="ajout avec succes";

}else{
	$_SESSION['error']="C est votre propre produit !!";
 
}
}
header("location:".  $_SERVER['HTTP_REFERER']); 
?>