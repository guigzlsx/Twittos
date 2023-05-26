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
            header('Location: index.php');
        }

        // echo $_SESSION['id'];




    } else {
        echo "Veuillez comlpléter tout les champs...";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Page d'inscription</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap_page.css">
</head>

<body>

    <div class="container">
    <button class="back-btn" onclick="history.back()">&times;</button>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">S'inscrire à Twittos</h4>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="nom">Nom d'utilisateur</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Entrez votre nom d'utilisateur" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="nom">Mot de Passe :</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Entrez votre mot de passe" autocomplete="off">
                            </div>
                            <input type="submit" class="btn btn-primary btn-block mt-4" name="envoi">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
