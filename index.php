<?php
session_start();

include "model/config.php";
include "model/database.php";
include "model/UserManager.php";
include "model/ArticleManager.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>blog</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Navbar content -->
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php?home">Acceuil</a>

            <?php if (isset($_SESSION['id'])) {
                $pseudo = $_SESSION['pseudo'];
                echo " <b> Bonjour" . " " . $pseudo . "</b>";
            }
            ?>

            <ul class="navbar-nav">
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'utilisateur') { ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?profilUser">Mon Profil</a>
                    <a class="nav-link text-danger" href="index.php?DeconnexionUser" name="deco">deconnexion</a>
                </li>
                <?php } elseif (isset($_SESSION['role'])  && $_SESSION['role'] === 'admin') { ?>
                <!-- <div class="navAdmin"> -->
                <li class="nav-item">
                    <a href="index.php?listUsers" class="nav-link">liste des membres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?profilUser">Mon Profil</a>
                    <a class="nav-link text-danger" href="index.php?DeconnexionUser" name="deco">deconnexion</a>
                </li>
                <!-- </div> -->
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?connexion">connexion</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>



    <?php
    if (isset($_GET['home'])) {
        include 'controller/Articles.php';
        include 'view/home.php';
    } else if (isset($_GET['inscription'])) {
        include 'controller/Users.php';
        include 'view/inscription.php';
    } else if (isset($_GET['DeconnexionUser'])) {
        include 'controller/DeconnexionUser.php';
    } else if (isset($_GET['connexion'])) {
        include 'controller/Users.php';
        include 'view/connexion.php';
    } else if (isset($_GET['profilUser'])) {
        include 'controller/Users.php';
        include 'view/profilUser.php';
    } else if (isset($_GET['listUsers'])) {
        include 'controller/Users.php';
        include 'view/listUsers.php';
    } else if (isset($_GET['createArticle'])) {
        include 'controller/Articles.php';
        include 'view/createArticle.php';
    } else if (isset($_GET['modifArticle'])) {
        include 'controller/Articles.php';
        include 'view/modifArticle.php';
    } else {
        include 'controller/Articles.php';
        include 'view/home.php';
    }




    ?>





</body>

</html>