<?php
    session_start();

    require 'actions/getAllArticleAction.php';
?>

<?php include 'include/nav.php'?>


<header>
        <div class="header">
            <div class="left">
                <h3>Featured Post</h3>
                <h1>How AI will Change the Future</h1>
                <p>
                    The future of AI will see home robots having enhanced intelligence, increased capabilities, and
                    becoming more personal and possibly cute. For example, home robots will overcome navigation,
                    direction
                </p>
                <button>
                    Read More
                </button>
            </div>
            <div class="right">
                <img src="assets/img/Container.png" alt="">
            </div>
        </div>
    </header>
    <section>
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
                <a href="#">Read More...</a>
            </div>

            <?php
                }
            ?>






        </div>



    </section>
<?php include 'include/footer.php'?>
