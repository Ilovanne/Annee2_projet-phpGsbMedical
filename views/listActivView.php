<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des activités - Projet 3 PHP</title>
  <!-- Ajouter le favicon -->
  <link rel="icon" href="views\downloads\Logo_Colore.png" type="image/png">
  <!-- Lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="views/bootstrap/css/bootstrap.min.css">
  <style>
    .card {
      flex: 0 0 calc(33.33% - 1rem); /* Utilisation de Flexbox pour une largeur dynamique */
      margin-right: 1rem;
      margin-bottom: 1rem;
    }
    .card-body {
      min-height: 200px; /* Hauteur minimale pour éviter les sauts de ligne */
    }
    @media (max-width: 992px) {
      .card {
        flex: 0 0 calc(50% - 1rem); /* Réduction à deux colonnes sur les écrans de taille moyenne */
      }
    }
    @media (max-width: 576px) {
      .card {
        flex: 0 0 100%; /* Une seule colonne sur les écrans étroits */
      }
    }
  </style>
</head>
<body>

  <div class="container mt-5">
  <h1 class="text-center">
      <img src="views/downloads/Logo_Colore.png" alt="Logo GSB Medical" style="width: 100px; height: auto; margin-right: 20px;">
      Liste des activités
    </h1>
    <br> <br>

    <div class="d-flex flex-wrap justify-content-between">
        <?php foreach ($activites as $activite): ?>
        <div class="card">
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
