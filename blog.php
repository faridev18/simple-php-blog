<?php
    session_start();

    require 'actions/getAllArticleAction.php';
?>

<?php include 'include/nav.php'?>



    <section>
        <h1 class="section_title">Tous les articles</h1>
        <div class="grid-container">



<?php
    while ($article = $getAllArticle->fetch()) {
    ?>

            <div class="article">
                <div class="article_image">
                    <img src="image_article/<?= $article['image']?>" alt="">
                </div>
                <div class="article_info">
                    <div class="category"><?= $article['categorie']?></div>
                    <div class="date"><?= $article['created_at']?></div>
                </div>

                <h2><?= $article['title']?> </h2>
                <p><?=substr($article['content'], 0, 100) ?>... </p>
                <a href="article.php?id=<?= $article['id']?> ">Read More...</a>
            </div>

            <?php
                }
            ?>






        </div>



    </section>
<?php include 'include/footer.php'?>
