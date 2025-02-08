<?php
session_start();
include 'actions/database.php';
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_POST['validate'])) {
	if (!empty($_POST['name']) AND !empty($_POST['email']) AND!empty($_POST['password']) AND!empty($_POST['password2']) ) {

		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$role = 'visiteur';
		$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$pass2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);


		if ($_POST['password'] == $_POST['password2']) {
			$checkIfUserAlreadyExists = $bdd->prepare('SELECT email FROM users WHERE email = ?');
	        $checkIfUserAlreadyExists->execute(array($email));

	        if($checkIfUserAlreadyExists->rowCount() == 0){
	            
	            //Insérer l'utilisateur dans la bdd
	            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(name, email,role, password)VALUES(?, ?, ?, ?)');
	            $insertUserOnWebsite->execute(array($name, $email, $role, $pass));

	            //Récupérer les informations de l'utilisateur
	            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, name, email, role FROM users WHERE name = ? AND email = ? ');
	            $getInfosOfThisUserReq->execute(array($name, $email));

	            $usersInfos = $getInfosOfThisUserReq->fetch();



	            //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
	            $_SESSION['auth'] = true;
	            $_SESSION['id'] = $usersInfos['id'];
	            $_SESSION['name'] = $usersInfos['name'];
	            $_SESSION['email'] = $usersInfos['email'];
	            $_SESSION['role'] = $usersInfos['role'];

	           
	            //Rediriger l'utilisateur vers la page d'accueil
	            header('Location: index.php');

	        }else {
	            $error = "L'utilisateur existe déjà sur le site";
	        }
		}else {
			$error = "Vos mots de passe ne sont identiques";
		}

	}else {
		$error = "Veuillez remplir tous les champs";
	}
}

?>