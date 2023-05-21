<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter IIM</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php require_once 'header.template.php'; ?>
    <main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <img class="logo" src="Twitter-logo.svg.webp" alt="Logo twitter">
        <br><br>
        <form class="form_user" action="user.php" method="POST">
              <input type="hidden" name="form" value="formulaire_ajout_user">
                <article class="article">
                    <h2>Create an account:</h2>
                        <br>
                        <label for="user_prenom">First name:</label>
                        <br>
                        <input type="text" name="user_prenom" id="user_prenom"> 
                        <br>
                        <label for="user_nom">Last name:</label>
                        <br>
                        <input type="text" name="user_nom" id="user_nom">
                        <br>
                        <label for="user_pseudo">Username:</label>
                        <br>
                        <input type="text" name="user_pseudo" id="user_pseudo">
                        <br>
                        <label for="user_email">Email:</label>
                        <br>
                        <input type="text" name="user_email" id="user_email">
                        <br>
                        <label for="user_password">Password:</label>
                        <br>
                        <input type="password" name="user_password" id="user_password">
                        <br>
                        <label for="user_picture">Profile picture:</label>
                        <br>
                        <input type="text" name="user_picture" id="user_picture">
                        <br>
                        <input type="submit" value="Envoyer" class="button_submit">
                    </article>
                </form>
    <br><br><br><br>
</main>
<?php require_once 'footer.template.php' ; ?>
</body>
</html>