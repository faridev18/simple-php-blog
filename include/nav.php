

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
<nav>
        <div class="nav">
            <img src="assets/img/Logo.png" alt="">

            <div class="navlinks">
            <a href="index.php">Accueil</a>   
            <a href="blog.php">Blog</a>

                <?php
                  if (isset($_SESSION['auth'])) {
                  ?>
                  <a href="add-article.php">Ajouter un article</a>
                  <a href="gestion-article.php">Gérer les articles</a>
                  <a href="actions/deconnexion.php">Se deconnecter</a>

                <?php
                    } else {
                    ?>
                  <a href="register.php">S'inscrire</a>
                  <a href="login.php">
                    <button>Se connecter</button>
                  </a>

                <?php
                    }
                ?>
            </div>
        </div>

    </nav>

