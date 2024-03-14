<!-- page_inscription.html -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription aux Événements</title>
  <!-- Ajouter le favicon -->
  <link rel="icon" href="views\downloads\Logo_Colore.png" type="image/png">
  <!-- Ajouter le lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="views/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
  <h1 class="text-center">
      <img src="views/downloads/Logo_Colore.png" alt="Logo GSB Medical" style="width: 100px; height: auto; margin-right: 20px;">
      Inscription : 
    </h1>

    <!-- Formulaire d'inscription -->
    <form>
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
      </div>
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" required>
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email" required>
      </div>
      <button type="submit" class="btn btn-primary">S'inscrire</button>
      <div class="mt-4">
      <a href="?action=listeactivites" class="btn btn-primary">Retour à l'Accueil</a>
    </div>
    </form>
  </div>

</body>
</html>
