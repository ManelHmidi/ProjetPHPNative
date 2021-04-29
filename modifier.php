<?php 
session_start();

$email = $_SESSION["email"];
echo $email;

$link = mysqli_connect('localhost', 'root','','projetweb');

$name = $_POST['prenom'];
$lastName = $_POST['nom'];
$tel = $_POST['tel'];
$adresse = $_POST['adresse'];
$date = $_POST['dateNaissance'];



	$req = "UPDATE utilisateur
			SET nom = '$lastName', prenom = '$name', tel = '$tel', adresse = '$adresse', dateNaissance = '$date'
			WHERE email ='$email'";
		mysqli_query($link, $req);
		echo "modification effectuée";

		$_SESSION['nom']=$lastName;
		$_SESSION['dateNaissance']=$date;
		$_SESSION['prenom']=$name;
		$_SESSION['tel']=$tel;		
		$_SESSION['adresse']=$adresse;

                    $idReq = "select * from `utilisateur` where email ='$email'";
                    $id = mysqli_query($link, $idReq);

                    while ($result = mysqli_fetch_assoc($id)) {
                    	$_SESSION['message']="Modification effectuée!!";
                    	header('location:modifierCoordonnees.php?idUser='.$result["idUser"]);
                }   
;?>