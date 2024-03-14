<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des activités - Projet 3 PHP</title>
  <!-- Lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="views/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <h1 class="text-center">Liste des activités</h1>
    <br> <br>

    <div class="d-flex justify-content-between flex-wrap">
        <?php foreach ($activites as $activite): ?>
        <div class="card mb-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $activite->nom; ?></h5>
                <p class="card-text"><?= $activite->description; ?></p>
                <p class="card-text"><?php echo date('d/m/Y H:i', strtotime($activite->date_heure)); ?></p>
                <a href="?action=inscription&activite=<?= $activite->id; ?>" class="btn btn-primary">Inscription</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="mt-4">
      <a href="?action=home" class="btn btn-primary">Retour à l'Accueil</a>
    </div>

  </div>
</body>
</html>
