<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Twittos</title>
</head>

<body>
  <?php require_once 'header.template.php'; ?>
  <main>
    <div class="articles">
      <?php foreach ($articles as $article): ?>
        <h3>
          <?php echo $article['titre'] ?>
        </h3>
        <div class="contenu">
          <p>
            <?php echo $article['contenu'] ?>
          </p>
        </div>
        <div class="date">
          <p>
            <?php echo "Écrit à " . date("d/m/Y", strtotime($article['date'])) .
              " à " . date("H:i", strtotime($article['date'])) ?>
          </p>
        </div>
        <br>
        <div class="suppr">
          <form action="delete.php" method="post">
            <input type="hidden" name="form" value="formulaire_supp_article">
            <input type="hidden" name="article_id" value="<?php echo $article['id'] ?>">
            <input type="hidden" name="Supprimer">

          </form>
          <form action="delete.php" method="post">
            <input type="hidden" name="form" value="formulaire_supp_article">
            <input type="hidden" name="article_id" value="<?php echo $article['id'] ?>">
            <input type="submit" value="Supprimer">
          </form>
        </div>
        <br><br>
      <?php endforeach; ?>

    </div>

    <div id="popup" class="popup">
      <div class="popup-content">
        <p>Veuillez vous inscrire ou vous connecter</p>

        <button id="Inscription" onclick="window.location.href='Inscription.php'">Inscription</button>
        <button id="Connexion" onclick="window.location.href='Connexion.php'">Connexion</button>

        <button id="close-btn">Fermer</button>
      </div>
    </div>



    <div class="container_mess">
      <button class="tweet-btn" id="open_popup" onclick="window.location.href='Tweet.php'">Écrire un tweet</button>
    </div>





  </main>

  <script src="main.js"></script>

</body>


</html>