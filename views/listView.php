<!-- page_medicaments.html -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Médicaments</title>
  <!-- Ajouter le lien vers Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <h1 class="text-center">Liste des Médicaments</h1>

    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Date de Création</th>
          <th scope="col">Laboratoire Créateur</th>
          <th scope="col">Détails</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Medicament 1</td>
          <td>01/01/2022</td>
          <td>Laboratoire A</td>
          <td><a href="notFoundView.php" class="btn btn-primary">Détails</a></td>
        </tr>
        <!-- Ajoutez d'autres lignes pour chaque médicament -->
      </tbody>
      
    </table>
    <div class="mt-4">
      <a href="homeView.php" class="btn btn-primary">Retour à l'Accueil</a>
    </div>
  </div>

  <!-- Ajouter le lien vers Bootstrap JS et les dépendances -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
