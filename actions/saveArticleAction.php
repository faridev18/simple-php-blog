<?php

include 'actions/database.php';

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_POST['upload']) and isset($_FILES['image'])) {

    if (! empty($_POST['title']) and ! empty($_POST['content']) and ! empty($_POST['categorie'])) {

        $title             = htmlspecialchars($_POST['title']);
        $content           = htmlspecialchars($_POST['content']);
        $categorie         = htmlspecialchars($_POST['categorie']);
        $tailleMax         = 6291456;
        $extensionsValides = ['jpg', 'jpeg', 'gif', 'png', "webp"];
        $user_id           = $_SESSION['id'];

        // Vérifiez si la taille de l'image est conforme
        if ($_FILES['image']['size'] <= $tailleMax) {

            // recuperer l'extension de l'image
            $extensionUpload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
            // Vérifiez si l'extension est conforme
            if (in_array($extensionUpload, $extensionsValides)) {

                $uploadDir = __DIR__ . '/../image_article/';

                // Vérifiez si le répertoire existe, sinon créez-le
                if (! is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                // deplacer l'image dans image_article
                $chemin   = $uploadDir . $_FILES['image']['name'];
                $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);

                if ($resultat) {
                    $insertCours = $bdd->prepare('INSERT INTO articles (title,content,user_id, image,categorie )VALUES( ?, ?, ?, ?, ?)');
                    $insertCours->execute(
                        [
                            $title,
                            $content,
                            $user_id,
                            $_FILES['image']['name'],
                            $categorie,
                        ]
                    );
                    $success = "Votre article a bien été enregistré";

                } else {
                    $error = "Erreur durant l'importation de l'image";
                }

            } else {
                $error = "Votre image doit être de type jpg, jpeg, gif, webp ou png";
            }

        } else {
            $error = "L'image ne doit pas dépasser 6 Mo";
        }

    } else {
        $error = "Veuillez remplir tous les champs";
    }

}
