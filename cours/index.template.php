<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Twittos</title>
</head>

<body>
  <div class="page">
    <?php require_once 'header.template.php';
    ?>
    <main>



      <div class="sidenav">
        <a href="http://localhost/cours">Accueil</a>
        <a href="http://localhost/cours/Inscription.php">Inscription</a>
        <a href="http://localhost/cours/Connexion.php">Connexion</a>
        <a href="http://localhost/cours/Tweet.php">Ecrire</a>
      </div>

      <div class="tags">
        <button class="tag" data-tag="rouge">Rouge</button>
        <button class="tag" data-tag="vert">Vert</button>
        <button class="tag" data-tag="bleu">Bleu</button>
        <button id="show-all-btn">Show All</button>

      </div>






      <div class="articles">
        <?php foreach ($articles as $index => $article): ?>
          <div class="article" data-tag="<?php echo $article['tag'] ?>">
            <h3>
              <?php echo $article['titre'] ?>
            </h3>
            <h3>
              <?php echo $article['tag'] ?>
            </h3>
            <div class="contenu">
              <p>
                <?php echo $article['contenu'] ?>
              </p>
            </div>
            <br>
            <div class="image_tweet">
            <img src="img/<?php echo $article['img']; ?>" alt="<?php echo $article['img']; ?>">
            </div>
            <br>
            <div class=" date">
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
        </div>
        <br>
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
  </div>

</body>


</html>
