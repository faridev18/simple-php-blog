<?php
    session_start();

    require 'actions/getArticleAction.php';
    require 'actions/saveCommentAction.php';

?>

<?php include 'include/nav.php'?>

    <section>
        <h1 class="section_title"> <?php echo $article["title"]?></h1>
        <p class='content'>
            <?php echo nl2br($article["content"])?>

        </p>
    </section>
    <section>
        <h1 class="section_title">Commentaires</h1>

        <div class='content'>

        
        <?php
            while ($comment = $commentOfArticle->fetch()) {
        ?>
            <p>
              <strong>  <?=$comment['name'] ?> </strong>
            </p>
            <p>
                <?=$comment['comment'] ?> <br> <br>
            </p>



        <?php
            }
        ?>



        </div>



        <div class='content'>

        <?php
                  if (isset($_SESSION['auth'])) {
                  ?>
                   <form action="" method="POST" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">

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
      
                        <label for="comment" style="display: block; font-size: 1.2em; font-weight: bold; margin-bottom: 10px; color: #333;">Ajouter un commentaire</label>
                        <textarea name="comment" id="comment" style="width: 90%; height: 150px; padding: 10px; font-size: 1em; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>

                        <button name='submit' type="submit" style="margin-top: 10px; padding: 10px 20px; font-size: 1em; color: #fff; background-color: #007bff; border: none; border-radius: 4px; cursor: pointer;">Envoyer</button>
                    </form>

                <?php
                    } else {
                    ?>
                  <p  style="text-align:center; color:red; font-size:30px;">Vous devez vous connecter pour poster un commentaire</p>

                <?php
                    }
                ?>

      

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

    </section>
<?php include 'include/footer.php'?>
