<?php
session_start();

$link = mysqli_connect('localhost', 'root','','projetweb');

$correspond = $_SESSION['idCorrespond'];

$idProduit = htmlentities(trim($_GET['idProduit']));
$idProduit = (int) $idProduit;

$sql = "select * FROM commande
        where idProduit = '$idProduit'
        and idCorrespond = '$correspond'";

$affiche = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($affiche)) {
$etat = $row["etat"];
}
			if (strcmp($etat, 'Valide') !== 0) {
          		$req = "UPDATE commande 
					SET etat = 'Valide'
					WHERE idProduit = '$idProduit'
					AND idCorrespond ='$correspond'";

    			mysqli_query($link, $req);

    		$_SESSION['message']="Commande Maintenant Valide! Le client est notifié!";

          	} else {
   			$req = "UPDATE `commande` 
					SET etat = 'Refused'
					WHERE idProduit = '$idProduit'
					AND idCorrespond ='$correspond'";

    		mysqli_query($link, $req);

    		$_SESSION['message']="Commande Maintenant Réfusée! Le client est notifié!";
          	}

    		header('location:historique.php');
?>