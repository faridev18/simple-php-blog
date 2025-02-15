<?php
    session_start();

    require 'actions/getAllArticleAction.php';
?>


    <?php include 'include/nav.php'; ?>

   <div class="pages">
   <h1>Gérer les articles</h1>

   <table>
  <caption>Article</caption>
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Date d'ajout</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

<?php
    while ($article = $getAllArticle->fetch()) {
    ?>
    <tr>
      <td><img height="100px" src="image_article/<?= $article['image']?>" alt=""></td>
      <td> <?= $article['title']?> </td>
      <td><?= $article['categorie']?></td>
      <td><?= $article['created_at']?></td>
      <td>
        <a class="edit_button" href="edit-article.php?id=<?= $article['id']?>">Modifier</a>
        <a onclick=" return confirm('Voulez vous vraiment supprimer cet article?')" class="delete_button" href="actions/deleteArticleAction.php?id=<?= $article['id']?>">Supprimer</a>
      </td>
    </tr>
    <?php
        }
    ?>


  </tbody>
</table>

</div>

<?php include 'include/footer.php' ?>