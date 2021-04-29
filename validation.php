<?php 

$link = mysqli_connect('localhost', 'root','','projetweb');

$email = $_POST['email'];
$pass = $_POST['mdp'];

$s = " select * from utilisateur where email = '$email' && mdp = '$pass'";
$result = mysqli_query($link, $s);

$num =mysqli_num_rows($result);

if ($num == 1) {

	session_start();
		$_SESSION['email']=$email;
		$_SESSION['mdp']=$pass;
		$_SESSION['message']="Vous etes connecté!!";
	header('location: home.php');

}else{
    header('location: signin.php');
}
;?>