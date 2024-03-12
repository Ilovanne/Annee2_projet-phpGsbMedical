<!-- page_medicaments.html -->

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Médicaments</title>
  <!-- Ajouter le lien vers Bootstrap CSS -->
  <link href="views/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
        <?php foreach($medicaments as $medicament): ?>
          <tr>
            <td><?= $medicament->nom ?></td>
            <td><?= $medicament->date_creation ?></td>
            <td><?= $medicament->laboratoire_createur ?></td>
            <td><a href="notFoundView.php" class="btn btn-primary">Détails</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      
    </table>
    <div class="mt-4">
      <a href="?action=home" class="btn btn-primary">Retour à l'Accueil</a>
    </div>
  </div>

</body>
</html>