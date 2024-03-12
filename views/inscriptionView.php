<!-- page_inscription.html -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription aux Événements</title>
  <!-- Ajouter le lien vers Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <h1 class="text-center">Inscription aux Événements</h1>

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
      <div class="form-group">
        <label for="evenement">Sélectionnez un Événement :</label>
        <select class="form-control" id="evenement" required>
          <option value="" selected disabled>Choisissez un événement</option>
          <option value="evenement1">Événement 1 - Date 1</option>
          <option value="evenement2">Événement 2 - Date 2</option>
          <option value="evenement3">Événement 3 - Date 3</option>
          <!-- Ajoutez d'autres événements ici -->
        </select>
      </div>
      <button type="submit" class="btn btn-primary">S'inscrire</button>
      <div class="mt-4">
      <a href="homeView.php" class="btn btn-primary">Retour à l'Accueil</a>
    </div>
    </form>
  </div>

  <!-- Ajouter le lien vers Bootstrap JS et les dépendances -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
