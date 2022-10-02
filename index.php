<?php
session_start();

require_once './functions/database.php';

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
                <img src="./img/logo_transparent3.png" width="45%" height="45%" alt="logo piesfajnyjest.pl"></a>
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
            <li class="nav-item "><a href="index.php" class="nav-link navbar-active" id="item1" onclick="navbarAction('item1')">
                Strona
                główna</a></li>
            <li class="nav-item "><a href="#" class="nav-link  " id="item2" onclick="navbarAction('item2')">
                Najnowsze
                wiadomości </a>
            </li>
            <li class="nav-item "><a href="#Concact" class="nav-link " id="item3" onclick="navbarAction('item3')"> Kontakt </a>
            </li>
            <li class="nav-item "><a href="#aboutUs" class="nav-link " id="item4" onclick="navbarAction('item4')"> O nas </a>
            </li>
            
          </ul>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
          <ul class="nav sm-list">
            <li class="nav-item"><a href="https://www.facebook.com/IPIESFAJNYJEST/" target="_blank" class="nav-link"
                onmouseover="flip('fb')" onmouseout="flop('fb')"><i class="fab fa-facebook fa-xl" id="fb"></i></a></li>
            <li class="nav-item"><a href="https://www.instagram.com/imeandog" target="_blank" class="nav-link"
                onmouseover="flip('ig')" onmouseout="flop('ig')"><i class="fab fa-instagram fa-xl" id="ig"></i></a></li>
            <li class="nav-item"><a href="https://www.youtube.com/channel/UCtxw386WzCdHjVP2L5mTV1Q" target="_blank"
                class="nav-link" onmouseover="flip('yt')" onmouseout="flop('yt')"><i class="fab fa-youtube fa-xl"
                  id="yt"></i></a></li>

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

  <!-- MID
    <div class="container  MainAds ">
      <div class="row ">
        <div class=" col-12 m-0 p-0   MainAds">
          <img src="/img/promocja.jpg" alt="reklama" width="100%" height="100%" id="mainads">
        </div>
      </div>
    </div>
-->

<div class="container text-center DogContent d-flex  justify-content-center">
  <div class="row ">
    <!--1ROW-->
    <div class="row ">
      <div class=" col-lg col-sm- m-2  ">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="http://localhost/piesfajnyjest/article.php?numberID=1">
                <div class="card text-bg-dark">
                  <img src=
                    <?php
                      $id=1;
                      $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                      $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                      $text1Query->execute();
                      $text= $text1Query->fetch();
                      echo $text['image'];
                    ?>
                   class="card-img" alt="piesek" id="photo01">
                  <div class="card-img-overlay" onmouseover="zoom('photo01');zoom('photo02');zoom('photo03')" onmouseout="zoomoff('photo01');zoomoff('photo02');zoomoff('photo03')">
                    <h5 class="card-title">
                      <?php
                        $id=1;
                        $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                        $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                        $text1Query->execute();
                        $text= $text1Query->fetch();
                        echo $text['title'];
                      ?>

                    </h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="carousel-item">
              <a href="http://localhost/piesfajnyjest/article.php?numberID=2">
                <div class="card text-bg-dark">
                  <img src=
                    <?php
                        $id=2;
                        $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                        $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                        $text1Query->execute();
                        $text= $text1Query->fetch();
                        echo $text['image'];
                      ?>
                  class="card-img" alt="piesek" id="photo02">
                  <div class="card-img-overlay" onmouseover="zoom('photo01');zoom('photo02');zoom('photo03')" onmouseout="zoomoff('photo01');zoomoff('photo02');zoomoff('photo03')">
                    <h5 class="card-title">
                      <?php
                          $id=2;
                          $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                          $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                          $text1Query->execute();
                          $text= $text1Query->fetch();
                          echo $text['title'];
                        ?>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="carousel-item">
              <a href="http://localhost/piesfajnyjest/article.php?numberID=3">
                <div class="card text-bg-dark">
                  <img src=
                    <?php
                          $id=3;
                          $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                          $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                          $text1Query->execute();
                          $text= $text1Query->fetch();
                          echo $text['image'];
                        ?>
                  class="card-img" alt="piesek" id="photo03">
                  <div class="card-img-overlay" onmouseover="zoom('photo01');zoom('photo02');zoom('photo03')" onmouseout="zoomoff('photo01');zoomoff('photo02');zoomoff('photo03')">
                    <h5 class="card-title">
                      <?php
                            $id=3;
                            $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                            $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                            $text1Query->execute();
                            $text= $text1Query->fetch();
                            echo $text['title'];
                          ?>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class=" col-lg-4 col-sm- m-2  Concent">
        <p>
        <h4>Witaj na naszej stronie ♥</h4>
        </p>
        <div class=" mb-3">
          <img src="./img/pies.jpg" alt="piesek" width="100%">
        </div>
        
        <div class=" ml-3 mr-3">
          <h5 > ♥ Wszyscy tutaj kochamy pieski ♥ </h5>
          <h6 class="mt-3"> "<i>Nie ma na świecie przyjaźni, która trwa wiecznie. Jedynym wyjątkiem jest ta, którą obdarza nas pies</i>" ~Konrad Lorenz. </h6>
        </div>
        
      </div>
    </div>

    <div class="row ">
      <div class=" col-lg  col-sm-12 m-2  ">
        <a href="http://localhost/piesfajnyjest/article.php?numberID=4">
          <div class="card text-bg-dark">
            <img src=
                  <?php
                      $id=4;
                      $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                      $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                      $text1Query->execute();
                      $text= $text1Query->fetch();
                      echo $text['image'];
                  ?>
            class="card-img" alt="piesek" id="photo1">
            <div class="card-img-overlay" onmouseover="zoom('photo1')" onmouseout="zoomoff('photo1')">
              <h5 class="card-title">
                <?php
                      $id=4;
                      $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                      $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                      $text1Query->execute();
                      $text= $text1Query->fetch();
                      echo $text['title'];
                  ?>
              </h5>
            </div>
          </div>
        </a>
      </div>
      <div class=" col-lg  col-sm-12 m-2  ">
        <a href="http://localhost/piesfajnyjest/article.php?numberID=5">
          <div class="card text-bg-dark">
            <img src=
              <?php
                $id=5;
                $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                $text1Query->execute();
                $text= $text1Query->fetch();
                echo $text['image'];
              ?>
            class="card-img" alt="piesek" id="photo2">
            <div class="card-img-overlay" onmouseover="zoom('photo2')" onmouseout="zoomoff('photo2')">
              <h5 class="card-title">
                <?php
                  $id=5;
                  $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                  $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                  $text1Query->execute();
                  $text= $text1Query->fetch();
                  echo $text['title'];
                ?>

              </h5>
            </div>
          </div>
        </a>
      </div>
      <div class=" col-lg-4 m-2  col-sm-12 ">
        <img src="./img/promocja.jpg" alt="reklama" width="100%" height="100%">
      </div>
    </div>
    <!--2ROW-->
    <div class="row ">
      <div class=" col-lg col-sm- m-2  ">
        <a href="http://localhost/piesfajnyjest/article.php?numberID=6">
          <div class="card text-bg-dark">
            <img src=
              <?php
                  $id=6;
                  $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                  $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                  $text1Query->execute();
                  $text= $text1Query->fetch();
                  echo $text['image'];
                ?>
            class="card-img" alt="piesek" id="photo3">
            <div class="card-img-overlay" onmouseover="zoom('photo3')" onmouseout="zoomoff('photo3')">
              <h5 class="card-title">
                <?php
                    $id=6;
                    $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                    $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                    $text1Query->execute();
                    $text= $text1Query->fetch();
                    echo $text['title'];
                  ?>
              </h5>
            </div>
          </div>
        </a>
      </div>

      <div class=" col-lg-4 col-sm- m-2  Concent" id="aboutUs">
        <p>
        <h4>O nas</h4>
        </p>
        <img src="./img/pies.jpg" alt="piesek" width="100%">
        <h5 class="mt-3">Jesteśmy grupką znajomych, która kocha pieski i przede wszystkim nie zgadza się na krzywde naszych przyjaciół! <h6>
        <h6 > "<i>Nasi idealni towarzysze zawsze mają cztery łapy</i>" ~Colette<h6>
      </div>
    </div>

    <div class="row ">
      <div class=" col-lg  col-sm-12 m-2  ">
        <a href="http://localhost/piesfajnyjest/article.php?numberID=7">
          <div class="card text-bg-dark">
            <img src=
              <?php
                    $id=7;
                    $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                    $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                    $text1Query->execute();
                    $text= $text1Query->fetch();
                    echo $text['image'];
                  ?>
            class="card-img" alt="piesek" id="photo4">
            <div class="card-img-overlay" onmouseover="zoom('photo4')" onmouseout="zoomoff('photo4')">
              <h5 class="card-title">
                <?php
                      $id=7;
                      $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                      $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                      $text1Query->execute();
                      $text= $text1Query->fetch();
                      echo $text['title'];
                    ?>
              </h5>
            </div>
          </div>
        </a>
      </div>
      <div class=" col-lg  col-sm-12 m-2  ">
        <a href="http://localhost/piesfajnyjest/article.php?numberID=8">
          <div class="card text-bg-dark">
            <img src=
              <?php
                $id=8;
                $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                $text1Query->execute();
                $text= $text1Query->fetch();
                 echo $text['image'];
              ?>
            class="card-img" alt="piesek" id="photo5">
            <div class="card-img-overlay"  onmouseover="zoom('photo5')" onmouseout="zoomoff('photo5')">
              <h5 class="card-title">
                <?php
                  $id=8;
                  $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                  $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                  $text1Query->execute();
                  $text= $text1Query->fetch();
                  echo $text['title'];
                ?>
              </h5>
            </div>
          </div>
        </a>
      </div>
      <div class=" col-lg-4 m-2  col-sm-12 ">
        <img src="./img/promocja.jpg" alt="reklama" width="100%" height="100%">
      </div>
    </div>
    <!--3ROW-->
    <div class="row ">
      <div class=" col-lg col-sm- m-2  ">
        <!--YT-->
        <div class="iframe-container">
          <iframe width="90%" height="515" src="https://www.youtube.com/embed/p4ohqiVbXbo"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>

      <div class=" col-lg-4 col-sm- m-2  Concent">
        <p>
        <h4>Udostępnij nasze artykuły</h4>
        </p>
        <img src="./img/pies.jpg" alt="piesek" width="100%">
        <div class="m-3">
          <h5 > Niech rónież twoi znajomi zobaczą te słodziaki ♥ </h5>
         
        </div>
      </div>
    </div>

    <div class="row ">
      <div class=" col-lg  col-sm-12 m-2  ">
        <a href="http://localhost/piesfajnyjest/article.php?numberID=9">
          <div class="card text-bg-dark">
            <img src=
              <?php
                  $id=9;
                  $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                  $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                  $text1Query->execute();
                  $text= $text1Query->fetch();
                  echo $text['image'];
                ?>
            class="card-img" alt="piesek" id="photo6">
            <div class="card-img-overlay" onmouseover="zoom('photo6')" onmouseout="zoomoff('photo6')">
              <h5 class="card-title">
                <?php
                    $id=9;
                    $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                    $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                    $text1Query->execute();
                    $text= $text1Query->fetch();
                    echo $text['title'];
                  ?>
              </h5>
            </div>
          </div>
        </a>
      </div>
      <div class=" col-lg  col-sm-12 m-2  ">
        <a href="http://localhost/piesfajnyjest/article.php?numberID=10">
          <div class="card text-bg-dark">
            <img src=
              <?php
                $id=10;
                $text1Query=$db->prepare('SELECT image FROM article WHERE id=:id');
                $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                $text1Query->execute();
                $text= $text1Query->fetch();
                echo $text['image'];
              ?>
            class="card-img" alt="piesek" id="photo7">
            <div class="card-img-overlay" onmouseover="zoom('photo7')" onmouseout="zoomoff('photo7')">
              <h5 class="card-title">
                <?php
                  $id=10;
                  $text1Query=$db->prepare('SELECT title FROM article WHERE id=:id');
                  $text1Query->bindValue(':id',$id,PDO::PARAM_INT);
                  $text1Query->execute();
                  $text= $text1Query->fetch();
                  echo $text['title'];
                ?>
              </h5>
            </div>
          </div>
        </a>
      </div>
      <div class=" col-lg-4 m-2  col-sm-12 ">
        <img src="./img/promocja.jpg" alt="reklama" width="100%" height="100%">
      </div>
    </div>


  </div>
</div>
  <!--Banner-->
  <div class="banner-bottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10">
          <img src="./img/xbody_card3.png.pagespeed.ic.ts6-Fzp1Tx.webp" width="100%" height="100%">
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