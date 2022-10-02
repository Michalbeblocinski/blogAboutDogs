<?php
session_start();
require_once './functions/database.php';
error_reporting(0);
$_SESSION['number_id']=$_GET ['numberID'];
if(isset($_SESSION['number_id'])){
}
else{
   $_SESSION['number_id']=1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pies fajny jest</title>

    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <!--Header-->
    <!--------------------->
    <!--------------------->
    <div class="header-container">
        <div class="header-mid">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 d-none d-md-block">
                        <div class="logo">
                            <a href="index.php">
                                <img src="./img/logo_transparent3.png" width="45%" height="45%"
                                    alt="logo piesfajnyjest.pl"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="header-banner d-flex justify-content-center">
                            <img src="./img/xheader_card.png.pagespeed.ic.km3KvJvPZR.png" alt="reklama" width=100%>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--mobile nav logo-->
    <div class="header-bottom sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <ul class="nav nav-menu menu">
                        <li class="nav-item "><a href="index.php" class="nav-link navbar-active" id="item1"
                                onclick="navbarAction('item1')">
                                Strona
                                główna</a></li>
                        <li class="nav-item "><a href="index.php" class="nav-link  " id="item2"
                                onclick="navbarAction('item2')">
                                Najnowsze
                                wiadomości </a>
                        </li>
                        <li class="nav-item "><a href="#Concact" class="nav-link " id="item3" onclick="navbarAction('item3')">
                                Kontakt </a>
                        </li>
                        <li class="nav-item "><a href="#Concact" class="nav-link " id="item4" onclick="navbarAction('item4')">
                                O nas </a>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <ul class="nav sm-list">
                        <li class="nav-item"><a href="https://www.facebook.com/IPIESFAJNYJEST/" target="_blank"
                                class="nav-link" onmouseover="flip('fb')" onmouseout="flop('fb')"><i
                                    class="fab fa-facebook fa-xl" id="fb"></i></a></li>
                        <li class="nav-item"><a href="https://www.instagram.com/imeandog" target="_blank"
                                class="nav-link" onmouseover="flip('ig')" onmouseout="flop('ig')"><i
                                    class="fab fa-instagram fa-xl" id="ig"></i></a></li>
                        <li class="nav-item"><a href="https://www.youtube.com/channel/UCtxw386WzCdHjVP2L5mTV1Q"
                                target="_blank" class="nav-link" onmouseover="flip('yt')" onmouseout="flop('yt')"><i
                                    class="fab fa-youtube fa-xl" id="yt"></i></a></li>

                    </ul>
                    <!--mobile nav logo-->
                    <div class="mobile-logo">
                        <img src="./img/logo_transparent2.png" width="190px" height="29px">
                    </div>
                </div>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </div>

    <!--Header-->
    <!--------------------->
    <!--------------------->
    <div class="container  DogContent d-flex  justify-content-center">
        
        <div class="row ">
            <div class=" col-lg-8 col-sm-12 ">
               
                <?php
                    $id=$_SESSION['number_id'];
                    $text1Query=$db->prepare('SELECT text1 FROM article WHERE id=:id');
                    $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                    $text1Query->execute();
                    $text= $text1Query->fetch();
                    echo $text['text1'];
                ?>


                
                <div class="banner-bottom" style="background-color: #EFEFEF;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-10">
                                <img src="img/xbody_card3.png.pagespeed.ic.ts6-Fzp1Tx.webp" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class=" col-lg-4 col-sm-12 ">
                <img src="img/reklamadluga.jpg" class="adslong">
                <img src="img/reklamadluga2.jpg" class="adslong">
            </div>
        </div>
    </div>




    <!--Banner-->
    <div class="banner-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <img src="img/xbody_card3.png.pagespeed.ic.ts6-Fzp1Tx.webp" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
    <!--Banner-->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">


          <!-- Section: Links  -->
  <section class="MainFooter " id="Concact">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4" style="color:#FEE715FF">
            <i class="fas fa-gem me-3 " style="color:#FEE715FF"></i>Pies Fajny Jest
          </h6>
          <p>
            Wspólnie pomgamy psom!
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-center"></div>
       

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" style="color:#FEE715FF">
            Sociale
          </h6>
          <p>
            <a href="https://www.facebook.com/IPIESFAJNYJEST" class="text-reset">Facebook</a>
          </p>
          <p>
            <a href="https://www.instagram.com/imeandog" class="text-reset">Instagram</a>
          </p>
          <p>
            <a href="https://youtu.be/qBanmHFnmKU" class="text-reset">YouTube</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-center">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-center" style="color:#FEE715FF">Kontakt</h6>
          
          <p>
            <i class="fas fa-brands fa-discord me-3 text-grayish"></i>
            .Espada#4764
          </p>
          <p>
            <i class="fas fa-envelope me-3 text-grayish"></i>
            mt.karas00@gmail.com
          </p>
          <p><i class="fas fa-brands fa-telegram me-3 text-grayish"></i> <a href="https://t.me/espadAbtw" class="text-reset">Telegram</a>
          </p>
        
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>


  <!-- Copyright -->
  <div class="text-center p-4 Copyright">
    <i class="fa-regular fa-copyright"></i><span class="copyright-text"> 2022 Copyright Espada & Michalek & Kamilek</span>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  <!--script -->
  <!--------------->
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/cb0b14c6f3.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>
</body>

</html>