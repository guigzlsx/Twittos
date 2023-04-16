<?php
$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
if(isset($_POST['envoi'])){
	if (!empty($_POST['username']) and !empty($_POST['password'])) {
		$username = htmlspecialchars($_POST['username']);
		$password = sha1($_POST['password']);
		
		$recupUser = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
		$recupUser->execute(array($username, $password));

		if ($recupUser->rowCount() > 0){
            $_SESSION['usernsame'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $recupUser->fetch()['id']; //fetch permet de recuperer les données 
			header('Location: Connect.php');

		}else{
			echo "Le mot de passe ou nom d'utilisateur est incorecte ";
		}

	}else{
		echo "Veuillez compléter tout les champs";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/Connexion.css">
	<title>Page de Connexion</title>
</head>
<body>
	
</body>
</html>
<body>
	<div class="container">
		<button class="back-btn" onclick="history.back()" >&times;</button> <!-- &times; est le symbole croix -->
		<h1>Connectez-vous</h1>
		<form action="Connect.php" method="POST">
			<label for="prenom">Prénom :</label>
			<br>
			<input type="text" name="username" autocomplete="off">
			<br>
			<label for="nom">Mot de Passe :</label>
			<br>
			<input type="password" name="password" autocomplete="off">
			<br>
			<input type="submit" name="envoi">
		  </form>
	</div>
</body>
</html>
