<!-- page_inscription.html -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription aux Événements</title>
  <!-- Ajouter le lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="views/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <h1 class="text-center">Inscription aux Événements</h1>

    <!-- Formulaire d'inscription -->
    <form method="post" action="index.php" >
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
      </div>
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" id="email" name="mail" placeholder="Entrez votre adresse email" required>
      </div>
      <button type="submit" name="action" value="inscription" class="btn btn-primary">S'inscrire</button>
      <div class="mt-4">
      <a href="?action=listeactivites" class="btn btn-primary">Retour à l'Accueil</a>
    </div>
    </form>
  </div>

</body>
</html>
