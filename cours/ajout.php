<?php

require_once 'database.php';

// Vérifiez si l'utilisateur est déjà connecté
// if (isset($_SESSION['username'])) {
//     // Rediriger l'utilisateur vers la page d'accueil

// } else {
//     header('Location: connexion.php');
//     exit();
// }

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (
        isset($_POST['form'])
        && $_POST['form'] === "formulaire_ajout_article"
    ) {
        if (
            !empty($_POST['titre']) && !empty($_POST['contenu'])
        ) {
            $dataImage = [
                'img' => 'img/' . $_FILES['img']['name'],
                'img_file' => $_FILES['img']['tmp_name']
            ];


            $data = [
                'titre' => $_POST['titre'],
                'tag' => $_POST['tag'],
                'contenu' => $_POST['contenu'],
                'img' => $_FILES['img']['name']       
            ];

            move_uploaded_file($dataImage['img_file'], $dataImage['img']);

            

            $request = $database->prepare("INSERT INTO articles (titre, contenu, date, tag, img) VALUES (:titre, :contenu, NOW(), :tag, :img)");
            $request->execute($data);
            header("Location: index.php");

        }
    }
}
