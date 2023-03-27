<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Votre site de scouting de football automatisé qui utilise l'IA pour aider votre club de football</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="mdb.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php include('navbar.php'); ?>
  <!-- Navbar -->
  <!-- Offres d'abonnement -->
  <div class="container mt-5">
    <h2 class="text-center mb-5">Nos offres d'abonnement</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Abonnement de base</h3>
          </div>
          <div class="card-body">
            <h4 class="text-center">$9.99/mois</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Recommandations de recrutement</li>
              <li class="list-group-item">Liste de joueurs</li>
              <li class="list-group-item">Recherche de joueurs</li>
              <li class="list-group-item">Statistiques de joueur</li>
            </ul>
          </div>
          <div class="card-footer">
            <a class="btn btn-primary d-block mx-auto" href="Abonnement_Base.php">S'abonner</a>

          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Abonnement premium</h3>
          </div>
          <div class="card-body">
            <h4 class="text-center">$19.99/mois</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Recommandations de recrutement</li>
              <li class="list-group-item">Liste de joueurs</li>
              <li class="list-group-item">Recherche de joueurs</li>
              <li class="list-group-item">Statistiques de joueur</li>
              <li class="list-group-item">Scout automatique de joueurs</li>
              <li class="list-group-item">Notifications en temps réel</li>
            </ul>
          </div>
          <div class="card-footer">
            <a class="btn btn-primary d-block mx-auto" href="Abonnement_basePremium.php">S'abonner</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Abonnement entreprise</h3>
          </div>
          <div class="card-body">
            <h4 class="text-center">$99.99/mois</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Recommandations de recrutement</li>
              <li class="list-group-item">Liste de joueurs</li>
              <li class="list-group-item">Recherche de joueurs</li>
              <li class="list-group-item">Statistiques de joueur</li>
              <li class="list-group-item">Scout automatique de joueurs</li>
              <li class="list-group-item">Notifications en temps réel</li>
              <li class="list-group-item">Personnalisation des rapports de scouting</li>
              <li class="list-group-item">Support client dédié</li>
            </ul>
          </div>
          <div class="card-footer">
            <a class="btn btn-primary d-block mx-auto" href="Abonnement_Entreprise">S'abonner</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin des offres d'abonnement -->

  
  

  <?php include('footer.php'); ?>
   <!-- footer -->
</body>

</html>