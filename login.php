
<?php

require 'actions/loginAction.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Connexion</title>
</head>
<body>
    <form action="" method='POST'>
        <a href="index.php">
        <img src="assets/img/Logo.png" alt="">
        </a>
        <br>


        <h1>Connexion</h1>
        <br>

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
      
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
       

        <button name='validate' type='submit'>Valider</button>

        <a href="register.php">S'inscrire</a>
    </form>


    
    
</body>
</html>