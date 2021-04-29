<?php 
session_start();

$email = $_SESSION["email"];
echo $email; 

$link = mysqli_connect('localhost', 'root','','projetweb');


$username = $_POST['email'];
$oldPass = $_POST['oldPass'];
$newPass = $_POST['newPass'];
$confirmPass = $_POST['confirmPass'];

if ($newPass != $confirmPass) {
	echo "Les deux nouvelles mots de passe ne se correspondent pas!!";
 
	$idReq = "select * from `utilisateur` where email ='$email'";
    $id = mysqli_query($link, $idReq);

    while ($result = mysqli_fetch_assoc($id)) {
        header('location:modifierCoordonnees.php?idUser='.$result["idUser"]);
    }
}else{

	$req = "UPDATE utilisateur
			SET email = '$username', mdp = '$newPass'
			WHERE email ='$email'";
		mysqli_query($link, $req);
		$_SESSION['message']="Modification effectuée!!";


		$_SESSION['email']=$username;
		$_SESSION['mdp']=$newPass;

        $idReq = "select * from `utilisateur` where email ='$username'";
        $id = mysqli_query($link, $idReq);

        while ($result = mysqli_fetch_assoc($id)) {
            header('location:modifierCoordonnees.php?idUser='.$result["idUser"]);
        }   
}
;?>