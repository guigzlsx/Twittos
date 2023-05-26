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
    <?php
    session_start();
    // Vérification de l'envoi du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form']) && $_POST['form'] === 'formulaire_ajout_article') {
      // Récupération des données du formulaire
      $titre = $_POST['titre'];
      $tag = $_POST['tag'];
      $contenu = $_POST['contenu'];

      // Vérification de l'image
      if (!empty($_FILES['img']['name'])) {
        // Vérification de la taille de l'image
        $maxFileSize = 2 * 1024 * 1024; // 2 Mo
    
        if ($_FILES['img']['size'] > $maxFileSize) {
          echo "Erreur : la taille de l'image dépasse 2 Mo.";
          exit();
        }

        // Vérification du format de l'image
        $allowedFormats = ['image/jpeg', 'image/png', 'image/gif'];

        if (!in_array($_FILES['img']['type'], $allowedFormats)) {
          echo "Erreur : le format de l'image n'est pas pris en charge (JPG/PNG/GIF uniquement).";
          exit();
        }

        // Traitement de l'upload de l'image
        $uploadDirectory = 'img/'; // Répertoire de destination des images uploadées
    
        if (!is_dir($uploadDirectory)) {
          mkdir($uploadDirectory, 0777, true);
        }

        $uploadFilePath = $uploadDirectory . $_FILES['img']['name'];

        if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadFilePath)) {
          echo "L'image a été uploadée avec succès.";
        } else {
          echo "Erreur lors de l'upload de l'image.";
        }
      }

      // Affichage des données de l'article
      if (!empty($titre) && !empty($contenu)) {
        echo "<h2>Article :</h2>";
        echo "Titre : $titre<br>";
        echo "Tag : $tag<br>";
        echo "Contenu : $contenu";
        if (!empty($_FILES['img']['name'])) {
          echo "<br>Image : <img src=\"$uploadFilePath\" alt=\"\">";
        }
      }
    }
    ?>
    <form action="ajout.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="form" value="formulaire_ajout_article">
      <label for="titre">Titre :</label>
      <br>
      <input type="text" name="titre" id="titre">
      <br>
      <br>
      <label type="text">Tag :</label>
      <select name="tag" id="tag">
        <option class="tag" value="rouge">rouge</option>
        <option class="tag" value="vert">vert</option>
        <option class="tag" value="bleu">bleu</option>
      </select>
      <br><br>
      <label for="img">Image:</label>
      <input type="file" name="img" accept=".jpg, .png, .gif">
      <br>
      <textarea name="contenu" id="contenu" cols="30" rows="10" placeholder="Un truc à dire ?"></textarea>
      <br>
      <div class="ajout">
        <input type="submit" value="Envoyer">
      </div>
    </form>
  </main>
  <footer>
    <p>&copy; 2023 Twittos</p>
  </footer>
</body>

</html>
