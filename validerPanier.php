<?php 

session_start();
$email = $_SESSION["email"];

$idCorrespond = htmlentities(trim($_GET['idCorrespond']));
$idCorrespond = (int) $idCorrespond;

$link = mysqli_connect('localhost', 'root','','projetweb');

$s = " select * from panier where idCorrespond = '$idCorrespond'";
$result = mysqli_query($link, $s);


	while ($row = mysqli_fetch_assoc($result)) {
		$idProduit=$row["idProduit"];
		$s = "insert into commande (idCorrespond, idProduit, etat)
	 		values ('$idCorrespond', '$idProduit', 'en attente')";
		mysqli_query($link, $s);

		$s = "insert into commandeuser (idCorrespond, idProduit, etat)
	 		values ('$idCorrespond', '$idProduit', 'en attente')";
		mysqli_query($link, $s);

		$remove = "DELETE FROM `panier` WHERE idCorrespond = '$idCorrespond' and idProduit = '$idProduit'";
		mysqli_query($link, $remove);
	}
	$_SESSION['message']="Votre panier est validé !!";
header("location:".  $_SERVER['HTTP_REFERER']); 


?>
</body>
</html>