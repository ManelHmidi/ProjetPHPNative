<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>SignIn</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
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

<!-- LOADER -->
<div id="loader">
  <div class="position-center-center">
    <div class="ldr"></div>
  </div>
</div>

<!-- Wrap -->
<div id="wrap"> 

  <!-- Content -->
  <div id="content"> 
    
    <!--======= PAGES INNER =========-->
    <section class="chart-page padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart"> 
          
          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-7">
                <h6>LOGIN YOUR ACCOUNT</h6>
                <form action="validation.php" method="post">
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-12">
                      <label> EMAIL
                        <input type="text" name="email" value="" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-12">
                      <label> PASSWORD
                        <input type="password" name="mdp" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- LOGIN -->
                    <li class="col-md-4">
                      <button type="submit" class="btn" name="valid_connection">LOGIN</button>
                    </li>
                    
                    <!-- CREATE AN ACCOUNT -->
                    <li class="col-md-4">
                      <div class="checkbox margin-0 margin-top-20">
                        <input id="checkbox1" class="styled" type="checkbox">
                        <label for="checkbox1"> Stay me Login</label>
                      </div>
                    </li>
                    
                    <!-- FORGET PASS -->
                    <li class="col-md-4">
                      <div class="checkbox margin-0 margin-top-20 text-right">
                        <a href="#.">Forget Password?</a>
                      </div>
                    </li>
                  </ul>

                  <a href="signUp.php">Vous avez pas encore de compte?</a>
                </form>
                
              </div>

          </div>
        </div>
      </div>
    </section>
  
  <!--======= FOOTER =========-->
    <footer>
<center>
      <div class="container">
        <!-- ABOUT Location -->
        <div class="col-md-4">
          <div class="about-footer">
            <p>
              <i class="icon-pointer"></i> Rue Mohamed Ali n°2 Chebba <br />
              Mahdia, Tunisia.
            </p>
            <p><i class="icon-call-end"></i> +216 93 169 435</p>
            <p><i class="icon-envelope"></i> hmidi.manel@issatso.u-sousse.tn</p>
          </div>
        </div>

        <!-- HELPFUL LINKS -->
        <div class="col-md-4">
          <h6>HELPFUL LINKS</h6>
          <ul class="link">
            <li><a href="#."> Products</a></li>
            <li><a href="#."> Find a Store</a></li>
            <li><a href="#."> Features</a></li>
            <li><a href="#."> Privacy Policy</a></li>
            <li><a href="#."> Blog</a></li>
            <li><a href="#."> Press Kit </a></li>
          </ul>
        </div>

        <!-- SHOP -->
        <div class="col-md-4">
          <h6>SHOP</h6>
          <ul class="link">
            <li><a href="#."> Home</a></li>
            <li><a href="#."> Homme</a></li>
            <li><a href="#."> Femme</a></li>
            <li><a href="#."> Kids</a></li>
            <li><a href="#."> Contact</a></li>
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