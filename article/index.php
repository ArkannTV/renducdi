<?php
require_once '../database.php';
ini_set("date.timezone", "Europe/Paris");

$request = $database->prepare("SELECT * FROM article ORDER BY date DESC");
$request->execute();
$article = $request->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === "GET") {
  if (
      !empty($_GET['recherche'])
  ) {
      $data = [
          "recherche" => "%" . $_GET['recherche'] . "%"
      ];

      $request = $database->prepare("SELECT * FROM article WHERE titre LIKE :recherche ORDER BY date DESC");
      $request->execute($data);
      $article = $request->fetchAll(PDO::FETCH_ASSOC);
  }
}

if ($_SERVER['REQUEST_METHOD'] === "GET") {
  if (
    !empty($_GET['prenom']) && !empty($_GET['nom'])
    && !empty($_GET['message'])
  ) {
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    $message = $_GET['message'];
  }
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  if (
    isset($_POST['form'])
    && $_POST['form'] === "formulaire_ajout_article"
  ) {
    if (
      !empty($_POST['titre']) && !empty($_POST['contenu'])
    ) {
      $titre = $_POST['titre'];
      $contenu = $_POST['contenu'];
      $tag = $_POST['tag'];
    }
  }
}

require_once 'index.template.php';
