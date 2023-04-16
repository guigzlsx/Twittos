<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Tweet.css">
  <title>Ecrire un Tweet</title>
</head>

<body>

</body>

</html>

<body>
  <header>
    <div class="container">
      <h1>Twittos</h1>
      <nav>
        <ul>
          <li><a href="http://localhost/cours">Accueil</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>

    <?php if (
      !empty($prenom) && !empty($nom)
      && !empty($message)
    ): ?>
      <h2>Données :</h2>
      <?= "Prénom : $prenom" ?>
      <?= "Nom : $nom" ?>
      <?= "Message : $message" ?>
    <?php endif; ?>




    <form action=" ajout.php" method="POST">
      <input type="hidden" name="form" value="formulaire_ajout_article">
      <label for="titre">Titre :</label>
      <br>
      <input type="text" name="titre" id="titre">
      <br>
      <br>
      <textarea name="contenu" id="contenu" cols="30" rows="10" placeholder="Un truc à dire ?"></textarea>
      <br>
      <div class="ajout">
        <input type="submit" value="Envoyer">

      </div>

    </form>
    <?php if (
      !empty($titre) && !empty($contenu)
    ): ?>
      <h2>Article :</h2>
      <?= "Titre : $titre" ?>
      <?= "Contenu : $contenu" ?>
    <?php endif; ?>





  </main>
  <footer>
    <p>&copy; 2023 Twittos</p>
  </footer>
</body>

</html>