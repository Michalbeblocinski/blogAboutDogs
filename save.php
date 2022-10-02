<?php
session_start();
require_once 'functions/database.php';
if(!isset($_SESSION['logged_id'])){


    if(isset($_POST['login'])){

        $login=filter_input(INPUT_POST,'login');
        $password=filter_input(INPUT_POST,'pass');
       
        $userQuery2=$db->prepare('SELECT id,pass FROM admins WHERE login=:login');
        $userQuery2->bindValue(':login',$login,PDO::PARAM_STR);
        $userQuery2->execute();
        $user2 = $userQuery2->fetch();
        if($user2 && ($password==$user2['pass'])){
            $_SESSION['logged_id']=$user2['pass'];
            unset( $_SESSION['bad_attemtp2']);

        }else{
            $_SESSION['bad_attemtp2']=true;
            
            header('Location: admin.php');
            exit();
        }
    }
    else{
        header('Location: admin.php');
        exit();

    }
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
        <link href="node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

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
                        <li class="nav-item "><a href="index.php" class="nav-link " id="item3" onclick="navbarAction('item3')">
                                Kontakt </a>
                        </li>
                        <li class="nav-item "><a href="logout.php" class="nav-link " id="item4" onclick="navbarAction('item4')">
                                Wyloguj się </a>
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
    
    <div class="container text-center ">
            <div class="row ">
                <div class="col-12 ">
                <div class="form-block">
                <form method ="post" action="saveToDb.php">
                        <label>tytuł: </br><input type ="text" name="title" required class="articleMake"></label></br>
                        <label>zdjęcie:(zapisz w formacie:  "./img/cos.jpg") </br><input type ="text" name="image" required class="articleMake"></label></br>
                        <label>Artykuł: </br><textarea name="editor" id="editor"  class="articleMake" ></textarea></label></br>
                        <input type="submit" value="Zapisz" class="m-3">
                        <?php
                         if(isset($_SESSION['bad_attemtp23'])){
                            echo '<p>Nieporpawne</p>';
                           
                            unset($_SESSION['bad_attemtp23']);
                           
                         }
                        ?>
                    </form>
                    </div>
                </div>
            </div>
    </div>

    

<!-- Footer -->
  <!--script -->
  <!--------------->
  <script src="script.js"></script>
  <script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
  <script>
    var editor = new FroalaEditor('#editor');
  </script>


  
  
  <script src="https://kit.fontawesome.com/cb0b14c6f3.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>
</body>

</html>