<?php
session_start();
include('database.php');

// print_r($_POST);
//$username = $_POST['username'];
//$password = $_POST['password'];
$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
// On récupère les informations de l'utilisateur connecté
// $afficher_profil = $bdd->query("SELECT * 
//     FROM users 
//     WHERE id = ?",
//     array($_SESSION['id'])
// );
// echo 'cooucou1';
/*try {
    $recupUser = $bdd->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $recupUser->execute([$username, $password]);
} catch (PDOException $e) {
    die($e->getMessage());
}*/

// print_r($recupUser);
// die();
?>

<!-- <html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Connect.css">
    <title>Mon profil</title>

    <head>

    <body>
        <h2>Voici le profil de
            <?= $_SESSION['username'] ?>
        </h2>
    </body>

</html> -->

<!DOCTYPE html>
<html>

<head>
    <title>Mon profil Twitter</title>
    <link rel="stylesheet" href="css/Connect.css">
</head>

<body>
    <header>
        <div class="profile-header">
            <div class="profile-picture">
                <img src="img/Batman.png" alt="Profile Picture">
            </div>
            <h1>Bienvenue sur la page de
                <?= $_SESSION['username'] ?>
            </h1>
            <ul>
                <li><a href="http://localhost/cours">Accueil</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section>
            <h3>Description</h3>
            <p>J'adore rire.</p>
        </section>
        <section>
            <h3>Tweets récents</h3>
            <div class="tweet">
                <p>L’humour, au sens large, est une forme d'esprit railleuse « qui s'attache à souligner le caractère
                    comique, ridicule,
                    absurde ou insolite de certains aspects de la réalité, dans le but de faire rire ou de divertir un
                    public. ».
                    L'humour est un état d'esprit, une manière d'utiliser le langage, un moyen d’expression.</p>
                <p class="tweet-date">Il y a 3 heures</p>
            </div>
            <div class="tweet">
                <p>Troisième planète en partant du soleil, la Terre est le seul endroit de l'univers connu dont il est
                    confirmé qu'il abrite la vie. Avec un rayon de 5 000 km, la Terre est la cinquième plus grande
                    planète de notre système solaire, et
                    c'est la seule dont on est sûr qu'elle possède de l'eau liquide à sa surface.</p>
                <p class="tweet-date">Hier</p>
            </div>
        </section>
    </main>
</body>

</html>
