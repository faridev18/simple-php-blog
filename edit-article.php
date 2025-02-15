<?php
    session_start();

    require 'actions/getArticleAction.php';
    require 'actions/updateArticleAction.php';

?>
    <?php include 'include/nav.php'; ?>

   <div class="pages">
   <h1>Modifier cet article</h1>

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
        <input type="text" id="title" name="title" value="<?=$article["title"] ?>" >
    </div>

    <!-- Champ Image -->
    <div>
        <label for="image">Image :</label>
        
        <input type="file" id="image" name="image" >

        <div>
            <h5>Image actuelle</h5>
            <img height="100px" src="image_article/<?= $article['image']?>" alt="">
        </div>
    </div>

    <!-- Champ Contenu -->
    <div>
        <label for="content">Contenu :</label>
        <textarea id="content" name="content" rows="10" ><?=$article["content"] ?></textarea>
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
    <button type="submit" name="upload" >Mettre à jour l'article</button>
</form>
   </div>

   <?php include 'include/footer.php' ?>