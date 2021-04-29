<?php 

$link = mysqli_connect('localhost', 'root','','projetweb');


$name = $_POST['prenom'];
$lastName = $_POST['nom'];
$tel = $_POST['tel'];
$adresse = $_POST['adresse'];
$email = $_POST['email'];
$date = $_POST['dateNaissance'];
$pass = $_POST['mdp'];
$passVerif = $_POST['mdpVerif'];


$s = " select * from utilisateur where email = '$email'";
$result = mysqli_query($link, $s);

$num =mysqli_num_rows($result);

if ($num == 1) {
	echo "email deja utilisé par un autre utilisateur!";

	header('location:registration.php');
}else{

	$reg = "insert into utilisateur(nom, prenom, tel, adresse, dateNaissance, email, mdp)
	 		values ('$lastName', '$name','$tel','$adresse','$date','$email' ,'$pass')";
		mysqli_query($link, $reg);
		echo "registration successful";
		
		session_start();
		$_SESSION['email']=$email;
		$_SESSION['mdp']=$pass;
		$_SESSION['nom']=$lastName;
		$_SESSION['dateNaissance']=$date;
		$_SESSION['prenom']=$name;
		$_SESSION['tel']=$tel;		
		$_SESSION['adresse']=$adresse;

	$panier= "select * from utilisateur where email = '$email'";
	$result = mysqli_query($link, $panier);

	while ($row = mysqli_fetch_assoc($result)) {
    $idUser= $ind["idUser"];
	}
	$panier= "insert into paniercorrespond (idUser)
	 		values ('$idUser')";
	mysqli_query($link, $panier);

    header('location:home.php');
}
;?>