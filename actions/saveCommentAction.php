<?php

include 'actions/database.php';

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_POST['submit'])) {

    if (! empty($_POST['comment']) ) {

        $comment= htmlspecialchars($_POST['comment']);
        $user_id= $_SESSION['id'];
        $idOfArticle = $_GET["id"];

  
        $insertComment = $bdd->prepare('INSERT INTO commentaires (comment,article_id,user_id)VALUES( ?, ?, ?)');
        $insertComment->execute(
            [
                $comment,
                $idOfArticle,
                $user_id,
            ]
        );
        $success = "Votre Commentaires a bien été enregistré";
    } else {
        $error = "Veuillez écrire un commentaire";
    }

}
