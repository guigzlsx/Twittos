<?php
$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
if (isset($_POST['envoi'])) {
    if (!empty($_POST['username']) and !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']); //pour la secu eviter les injections//
        $password = sha1($_POST['password']); //cryptage avec la methode sha1//
        $insertUser = $bdd->prepare('INSERT INTO users(username, password)VALUES(?,?)');
        $insertUser->execute(array($username, $password));

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE username = ? and password = ?');
        $recupUser->execute(array($username, $password));
        if ($recupUser->rowCount() > 0) {
            $_SESSION['usernsame'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $recupUser->fetch()['id']; //fetch permet de recuperer les données 
            // header('Location: index.template.php');
        }

        echo $_SESSION['id'];




    } else {
        echo "Veuillez comlpléter tout les champs...";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/Inscription.css">
</head>

<body>
    <div class="container">
        <button class="back-btn" onclick="history.back()">&times;</button>
        <form method="POST" action="">
            <h1>Inscription</h1>
            <label for="nom">Nom d'utilisateur :</label>
            <br>
            <input type="text" name="username" autocomplete="off">
            <label for="nom">Mot de passe:</label>
            <br>
            <input type="password" name="password" autocomplete="off">
            <input type="submit" name="envoi">
        </form>

    </div>


</body>

</html>