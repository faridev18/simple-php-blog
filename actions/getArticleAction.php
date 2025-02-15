<?php

require ("database.php");

if(isset($_GET["id"])  AND !empty($_GET["id"])){

    $idOfArticle = $_GET["id"];

    $checkIfArticleExists = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $checkIfArticleExists->execute(array($idOfArticle));

    if($checkIfArticleExists->rowCount()>0){

        $article = $checkIfArticleExists->fetch();

    }else{
        header('Location: ../index.php');
    }

}else{
    header('Location: ../index.php');
}



?>