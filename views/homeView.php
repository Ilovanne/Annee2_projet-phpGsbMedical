<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil GSB : Projet 3 php</title>
  <!-- Ajouter le lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="views/bootstrap/css/bootstrap.min.css">
  <!-- Ajouter le favicon -->
  <link rel="icon" href="views\downloads\Logo_Colore.png" type="image/png">
</head>
<body>

  <div class="container mt-5">
    <!-- Ajout du logo à gauche du titre -->
    <h1 class="text-center">
      <img src="views/downloads/Logo_Colore.png" alt="Logo GSB Medical" style="width: 50px; height: auto; margin-right: 20px;">
      Accueil : Accéder à nos services
    </h1>
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
          <a href="?action=listeactivites" class="btn btn-primary">Accéder aux évenements</a>
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

</body>
</html>
