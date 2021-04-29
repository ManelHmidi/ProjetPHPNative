 <?php

session_start();

$idUser = htmlentities(trim($_GET['idUser']));
$idUser = (int) $idUser;


$link = mysqli_connect('localhost', 'root','','projetweb');


$image = $_POST['image'];
$image = addslashes ( $image );
$nomProduit = $_POST['nomProduit'];
$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
$sexe = $_POST['sexe'];
$categorie = $_POST['categorie'];
$date = date("Y-m-d");

	$reg = "insert into produit (image, nomProduit,libelle, prix, dateCreation , idUser, sexe, categorie)
	 		values ('$image', '$nomProduit','$libelle','$prix','$date','$idUser','$sexe' ,'$categorie')";
		mysqli_query($link, $reg);
		$_SESSION['message']="Ajouté avec succès!!";

        header('location:profil.php?idUser='.$idUser);

?>