<nav>

<div>
  <h1>Logo</h1>
</div>
<div>



  <?php 
    if (isset($_SESSION['auth'])) {
    ?>
  <a href="add-article.php">Ajouter un article</a>
  <a href="actions/deconnexion.php">Se deconnecter</a>

    <?php 
    }else{
    ?>

    <a href="login.php">Se connecter</a>
  <a href="register.php">S'inscrire</a>

    <?php 
    }
    ?>


</div>

</nav>
