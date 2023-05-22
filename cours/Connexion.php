<?php
$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
if (isset($_POST['envoi'])) {
    if (!empty($_POST['username']) and !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = sha1($_POST['password']);

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
        $recupUser->execute(array($username, $password));

        if ($recupUser->rowCount() > 0) {
            $_SESSION['usernsame'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $recupUser->fetch()['id']; //fetch permet de recuperer les données 
            header('Location: Connect.php');

        } else {
            echo "Le mot de passe ou nom d'utilisateur est incorecte ";
        }

    } else {
        echo "Veuillez compléter tout les champs";
    }

}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Page de connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap_page.css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Se connecter à Twittos</h4>
                        <form action="Connexion.php" method="POST">
                            <div class="form-group">
                                <label for="prenom">Nom d'utilisateur</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Entrez votre nom d'utilisateur" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="nom">Mot de Passe :</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Entrez votre mot de passe" autocomplete="off">
                            </div>
                            <input type="submit" class="btn btn-primary btn-block mt-4" name="envoi">
                            <div class="text-center mt-3">
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Mot de passe oublié ?</a>
                            </div>
                            <hr>
                            <p class="text-center">Vous n'avez pas de compte ? <a href="#">Inscrivez-vous</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
