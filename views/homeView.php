<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceuil GSB : Projet 3 php</title>
  <!-- Ajouter le lien vers Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <h1 class="text-center">Acceuil : Accéder a nos services</h1>
    <h3 class="text-center">Nino FEDOU - Mathias HANY - Stefan FLOURENCE </h3>
    <br> <br>

    <div class="d-flex justify-content-between flex-wrap">
      <div class="card mb-4" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Liste médicaments</h5>
          <p class="card-text">Consultez aisément notre répertoire de médicaments.</p>
          <a href="?action=listemedicaments" class="btn btn-primary">Accédez à notre liste</a>
        </div>
      </div>

      <div class="card mb-4" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Inscriptions aux événements</h5>
          <p class="card-text">Découvrez les événements proposés par notre société. Profitez d'une inscription gratuite pour rester informé(e) sur notre actualité et sur les avancées dans le domaine médical.</p>
          <a href="inscriptionView.php" class="btn btn-primary">Accéder aux évenements</a>
        </div>
      </div>

      <div class="card mb-4" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Mention juridique</h5>
          <p class="card-text">Retrouvez l'ensemble de nos détails juridiques concernant notre site Internet.</p>
          <a href="?action=mentions" class="btn btn-primary">Accéder à la Page</a>
        </div>
      </div>
    </div>

  </div>

  <!-- Ajouter le lien vers Bootstrap JS et les dépendances -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
