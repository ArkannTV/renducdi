<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Cours de PHP</title>
</head>

<body>
  <?php require_once '../header.template.php'; ?>
  <main>
    <img class="logo" src="../Twitter-logo.svg.webp" alt="Logo twitter">
    <br><br>
    <h2>Recherche</h2>
    <br>
    <form action="" method="GET">
      <label for="recherche">Rechercher un Tweet:</label>
      <br>
      <input type="text" name="recherche" id="recherche">
    </form>
    <br><br>
    <h2>Tweets<h2>
    <br>
    <div class="grid">
      <?php foreach ($article as $article): ?>
        <article>
        <h3>
          <?php echo $article['titre'] ?>
        </h3><br>
        <p>
          <?php echo $article['contenu'] ?>
        </p><br> 
          <p>
            <?php echo "Écrit le " . date("d/m/Y", strtotime($article['date'])) . " à " . date("H:i", strtotime($article['date']))?>
          </p><br>
          <form action="delete.php" method="POST">
            <input type="hidden" name="form" value="formulaire_supp_article">
            <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
            <input type="submit" value="Supprimer">
            <button id="deleteButton" type="submit">Supprimer</button>
          </form>
        </article>
      <?php endforeach; ?>
    </div>
    <br><br>
    <h2>Poster un Tweet</h2>
    <form action="ajout.php" method="POST">
      <input type="hidden" name="form" value="formulaire_ajout_article">
      <label for="titre">Titre :</label>
      <br>
      <input type="text" name="titre" id="titre">
      <br>
      <label for="contenu">Contenu :</label>
      <br>
      <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
      <br>
      <select name="tag" id="tag">
      <option value="choix">Choisir un tag</option>
      <option value="jeuxvideo">Jeux vidéo</option>
      <option value="politique">Politique</option>
      <option value="culture">Culture</option>
      <option value="sport">Sport</option>
      </select>
      <input type="submit" value="Envoyer">
    </form>
    <br><br>
    <?php if (
      !empty($titre) && !empty($contenu)
    ) : ?>
      <h2>Article :</h2>
      <?= "Titre : $titre" ?>
      <?= "Contenu : $contenu" ?>
    <?php endif; ?>
  </main>
</body>

</html>