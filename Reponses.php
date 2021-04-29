<?php
session_start();

$link = mysqli_connect('localhost', 'root','','projetweb');
$email = $_SESSION["email"];

$req = "select * from `utilisateur` where email ='$email'";
$user = mysqli_query($link, $req);

while ($result = mysqli_fetch_assoc($user)) {
  $idUser = $result["idUser"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Profil</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/ionicons.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/modernizr.js"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

</head>
<body>
    <?php 
    include('messages.php');
    ?>

<!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>

<!-- Wrap -->
<div id="wrap"> 
  
  <!-- header -->
        <header class="header-1 light-head">
      <div class="sticky">
        <div class="container">

          <nav class="navbar ownmenu">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn"
                aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"><i class="fa fa-navicon"></i></span>
              </button>
            </div>

            <!-- NAV -->
            <div class="collapse navbar-collapse" id="nav-open-btn">
              <ul class="nav">
                <li class="dropdown active">
                  <a href="home.php">Home</a>
                </li>
               <li class="dropdown">
                  <a href="homme.php" class="dropdown-toggle" data-toggle="dropdown">Men</a>
                  <ul class="dropdown-menu">
                    <li><a href="giletsHomme.php">Gilets</a></li>
                    <li><a href="chemisesHomme.php">chemise</a></li>
                    <li><a href="vestesHomme.php">Vestes</a></li>
                    <li><a href="pantalonsHomme.php">Pantalons</a></li>
                    <li><a href="chaussuresHomme.php">Chaussures</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="femme.php" class="dropdown-toggle" data-toggle="dropdown">Women</a>
                  <ul class="dropdown-menu">
                    <li><a href="giletsFemme.php">Gilets</a></li>
                    <li><a href="robesFemme.php">Robes</a></li>
                    <li><a href="jupesFemme.php">Jupes</a></li>
                    <li><a href="manteauxFemme.php">Manteaux</a></li>
                    <li><a href="chaussuresFemme.php">Chaussures</a></li>
                    <li><a href="chemisesFemme.php">Chemises</a></li>
                    <li><a href="pantalonsFemme.php">Pantalons</a></li>
                    <li><a href="bijouxFemme.php">bijoux</a></li>
                    <li><a href="echarpesFemme.php">echarpes</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="kids.php" class="dropdown-toggle" data-toggle="dropdown">Kids</a>
                  <ul class="dropdown-menu">
                    <li><a href="giletsKids.php">Gilets</a></li>
                    <li><a href="RobesKids.php">Robes</a></li>
                    <li><a href="jupesKids.php">Jupes</a></li>
                    <li><a href="manteauxKids.php">Manteaux</a></li>
                    <li><a href="chaussuresKids.php">Chaussures</a></li>
                    <li><a href="chemisesKids.php">chemises</a></li>
                    <li><a href="pantalonsKids.php">Pantalons</a></li>
                  </ul>
                </li>
              </ul>
            </div>

            <!-- Nav Right -->
            <div class="nav-right">
              <ul class="navbar-right">
                <!-- USER INFO -->
                <li class="dropdown user-acc">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-user"></i>
                  </a>
                 <ul class="dropdown-menu">
                    <li>
                      <h6>Espace Utilisateur</h6>
                    </li>

                    <?php
                    $link = mysqli_connect('localhost', 'root','','projetweb');
                    $email = $_SESSION["email"];

                    $req = "select * from `utilisateur` where email ='$email'";
                    $afficherProfil = mysqli_query($link, $req);

                    while ($result = mysqli_fetch_assoc($afficherProfil)) {

                  echo '<li><a href="profil.php?idUser='.$result["idUser"].'">Voir Profil</a></li>';
                }
                    ?>

              <li><a href="MesCommandes.php">Voir Mes Commandes</a></li>
              <li><a href="Reponses.php">Réponses au demandes</a></li>
              <li><a href="logOut.php">Se Déconnecter</a></li>
                  </ul>
                </li>

                <!-- USER BASKET -->
                <li class="dropdown user-basket">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="true"><i class="icon-basket-loaded"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <?php


$email = $_SESSION["email"];

$req = "select * from `panier` where idCorrespond = (select idCorrespond
 from paniercorrespond
 where idUser =(select idUser 
from utilisateur where email = '$email')) ";
$afficherPanier = mysqli_query($link, $req); 
$num =mysqli_num_rows($afficherPanier);
if ($num == 0) {
  echo 'Votre Panier est vide !!';
}else{
?>
<table style="width:100%">
    <tr>
    <th>image</th>
    <th>Nom</th>
    <th>Prix</th>
  </tr>
<?php 

while ($result = mysqli_fetch_assoc($afficherPanier)) {
  $idProduit = $result["idProduit"];
  $idCorrespond = $result["idCorrespond"];
  $produit= "select * from produit where idProduit = '$idProduit'";
  $produitResult = mysqli_query($link, $produit); 
  while ($row = mysqli_fetch_assoc($produitResult)) {
    echo '<tr>
      <td><img src="'.$row["image"].'" style=" height: 80px; width:80px; "></td>
      <td>'.$row["nomProduit"].'</td>
      <td>'.$row["prix"].'</td>
      <td><a href="removePanier.php?idProduit='.$row["idProduit"].'"><i class="icon-close"></i></a></td>
    </tr>';
  }
}

    echo ' </table>
    <form action="validerPanier.php?idCorrespond='.$idCorrespond.'" method="post">
            <input type="submit" value="Valider La Commande" />                       
          </form>';
}
?>
                    </li>
                  </ul>
                </li>

                <!-- SEARCH BAR -->
                <li class="dropdown">
                  <a href="javascript:void(0);" class="search-open"><i class="icon-magnifier"></i></a>
                  <div class="search-inside animated bounceInUp">
                    <i class="icon-close search-close"></i>
                    <div class="search-overlay"></div>
                    <div class="position-center-center">
                      <div class="search">
                        <form>
                          <input type="search" placeholder="Search Shop" />
                          <button type="submit">
                            <i class="icon-check"></i>
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
  <!-- Content -->
  <div id="content"> 


        <div class="row ">
           <div class="item-display">
              <div class="row">                
                <!-- Products Select -->
                <div class="col-xs-4">
                  <div class="pull-right"> 
                    
                      
                  </div>
                </div>
              </div>
            </div>
          <div class="col-md-9 ">  
            <div class="shop-sidebar"> 
              
              <!-- Category -->
              <h5 class="shop-tittle margin-bottom-30">Consulter Historique</h5>
              <ul class="shop-cate">
                  <?php
                  
                  echo '<li><a href="historique.php">Historique Commandes</a></li>';
                  ?> 
              </ul>
              </div>
            </div>


    <section class="padding-top-100 padding-bottom-100 pages-in chart-page">
      <div class="container"> 

 <div class=" shopping-cart text-center "> 

<div class="cart-head">
            <ul class="row center" >
              <!-- PRODUCTS -->
              <li class="col-sm-2 ">
                <h6>ARTICLES</h6>
              </li>
              <!-- NAME -->
              <li class="col-sm-4">
                <h6>NOM ARTICLE</h6>
              </li>
              <!-- ACHETEUR -->
              <li class="col-sm-2">
                <h6>NOM ACHETEUR</h6>
              </li>
              <!-- TRAITEMENT COMMANDE -->
              <li class="col-sm-4">
                <h6>TRAITEMENT COMMANDE</h6>
              </li>

            </ul>
          </div>
          
          <?php 
          $sql = "select  distinct * FROM produit, commande
          where produit.idProduit = commande.idProduit
          and produit.idUser='$idUser'
          and commande.etat ='en attente'";

          $affiche = mysqli_query($link, $sql);
          $num = mysqli_num_rows($affiche);
          if ($num == 0) {
            echo "Personne n'a encore répondu à vos offres!";
          }else{
          while ($row = mysqli_fetch_assoc($affiche)) {
            $correspond=$row["idCorrespond"];
            $req2="select idUser, nom, prenom from utilisateur 
            where idUser = (select idUser
            from paniercorrespond
            where idCorrespond='$correspond')";
            $affiche2 = mysqli_query($link, $req2);
              while ($row2 = mysqli_fetch_assoc($affiche2)) {
                $nom= $row2["nom"];
                $prenom = $row2["prenom"];
                $id = $row2["idUser"];
              }
            $idProduit = $row["idProduit"];
            
            $_SESSION['idCorrespond']=$correspond;
          echo '<ul class="row cart-details">
            <li class="col-sm-6">
              <div class="media"> 
                <!-- Media Image -->
                <div class="media-left media-middle"> <a href="#." class="item-img"> 
                <img class="media-object" src="'.$row["image"].'" alt="" style="height: 80px; width:80px;"> </a></div>

                <!-- Item Name -->
                <div class="media-body">
                  <div> <span class="price">'.$row["nomProduit"].'</span> </div>
                </div>
              </div>
            </li>

            <!--NOM ACHETEUR-->
            <li class="col-sm-2" class="position-center-center">
              <div class="position-center-center"> <a href="voirProfil.php?idUser='.$id.'" class="price">'.$prenom.' '.$nom.'</a> </div>
            </li>

            <form action="refuserCommande.php?idProduit='.$idProduit.'" method="post">
              <!-- REFUSER -->
              <li class="col-sm-2" class="position-center-center">
                <div class="position-center-center"><input type="submit" value="REFUSER" /> </div>
              </li>
            </form>

            <form action="validerCommande.php?idProduit='.$idProduit.'" method="post">
            <!-- VALIDER -->
            <li class="col-sm-2" class="position-center-center">
              <div class="position-center-center"><input type="submit" value="VALIDER" /></div>
            </li>
            </form>

          </ul>';
        }
        }
            mysqli_close($link);
          ?>
        </div>
    </section>
  
  <!--======= FOOTER =========-->
    <footer>
<center>
      <div class="container">
        <!-- ABOUT Location -->
        <div class="col-md-6">
          <div class="about-footer">
            <p>
              <i class="icon-pointer"></i> Rue Mohamed Ali n°2 Chebba <br />
              Mahdia, Tunisia.
            </p>
            <p><i class="icon-call-end"></i> +216 93 169 435</p>
            <p><i class="icon-envelope"></i> hmidi.manel@issatso.u-sousse.tn</p>
          </div>
        </div>

        <!-- SHOP -->
        <div class="col-md-6">
          <h6>SHOP</h6>
          <ul class="link">
            <li><a href="home.php"> Home</a></li>
            <li><a href="homme.php"> Homme</a></li>
            <li><a href="femme.php"> Femme</a></li>
            <li><a href="kids.php"> Kids</a></li>
          </ul>
        </div>
        <!-- Rights -->

        <div class="rights">
          <p>© 2021 MyDressing All right reserved.</p>
          <div class="scroll">
            <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a>
          </div>
        </div>
      </div>
</center>
    </footer>

    <!--======= RIGHTS =========-->
  </div>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/own-menu.js"></script>
  <script src="js/jquery.lighter.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script>
  <script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
