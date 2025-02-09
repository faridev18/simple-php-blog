<?php
    session_start();

    require 'actions/saveArticleAction.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
</head>
<body>

    <?php include 'include/nav.php'; ?>

   <div class="pages">
   <h1>Ajouter un article</h1>

<form action="" method="POST" enctype="multipart/form-data">
    
<?php 
		if (isset($error)) {			
		 ?>
		 <div style="color: white;, text-align: center; background-color: red ; padding: 15px;"> <?=$error ?></div>

		 <?php 
		}
		  ?>

		  <?php 
		if (isset($success)) {			
		 ?>
		 <div style="color: white;, text-align: center; background-color: green ; padding: 15px;"> <?=$success ?></div>

		 <?php 
		}
		  ?>
      
    <!-- Champ Titre -->
    <div>
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" >
    </div>

    <!-- Champ Image -->
    <div>
        <label for="image">Image :</label>
        <input type="file" id="image" name="image" >
    </div>

    <!-- Champ Contenu -->
    <div>
        <label for="content">Contenu :</label>
        <textarea id="content" name="content" rows="10" ></textarea>
    </div>

    <!-- Champ Catégorie -->
    <div>
        <label for="categorie">Catégorie :</label>
        <select id="categorie" name="categorie" >
            <option value="">Sélectionnez une catégorie</option>
            <option value="Technologie">Technologie</option>
            <option value="Santé">Santé</option>
            <option value="Voyage">Voyage</option>
            <option value="Éducation">Éducation</option>
        </select>
    </div>

    <!-- Bouton de soumission -->
    <button type="submit" name="upload" >Publier l'article</button>
</form>
   </div>

    <style>



    </style>

</body>
</html>