<!DOCTYPE html>
<?php
// Connexion à la base de données
$dsn = 'mysql:host=athenascout;dbname=soccerdata;charset=utf8';
$username = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
    exit;
}?>



<html>

<head>
  <meta charset="utf-8" />
  <title>
  Votre site de scouting de football automatisé qui utilise l'IA pour aider votre club de football
  </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="mdb.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Corps de la page -->

  <nav class="navbar navbar-expand-lg bg-light navbar-light" id="mainNav">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="index.html"><img src="Logo.png" height="40" alt="logo" loading="lazy" />
      </a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Link -->
          <li class="nav-item">
            <a class="nav-link" href="Recommandation.php">Recommandations de recrutement</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Ma liste de joueur</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Inscription</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Recherche.php">Recherche</a>
          </li>
           
          <li class="nav-item">
              <a class="nav-link" href="#">Connexion</a>
            </li>
        </ul>

        <!-- Icons -->

         <ul class="navbar-nav d-flex flex-row me-1">
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://github.com/GetCodeMaster"><i class="fab fa-github"></i></a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/GCodemaster"><i class="fab fa-twitter"></i></a>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  

  <div class="container my-5">
  <div class="row">
    <div class="col-lg-6">
      echo "<h1 class="h2">$row['Joueur']</h1>";
      echo "<h2 class="h4">Club : {$row['club']}</h2>";

      <div class="row">
      <div class="col-lg-6">
  <?php
  echo "<h1 class='h2'> {$row['Joueur']} </h1>";
  echo "<h2 class='h4'>Club : {$row['Équipe']}</h2>";
  ?>
  <div class="row">
    <div class="col-sm-6 mb-3">
      <?php
      // Récupération des joueurs depuis la base de données
      $sql = "SELECT * FROM joueurs";
      $stmt = $pdo->query($sql);

      // Affichage des informations des joueurs
      while ($row = $stmt->fetch()) {
        echo "<p>Age : {$row['Age']}</p>";
        echo "<p>Poste : {$row['Place']}</p>";
        echo "<p>Valeur marchande : {$row['Valeur marchande']}</p>";
        echo "<p>Matchs joues : {$row['Matchs joues']}</p>";
        echo "<p>Minutes jouees : {$row['Minutes_jouees']}</p>";
        echo "<p>Buts : {$row['Buts']}</p>";
        echo "<p>xG : {$row['xG']}</p>";
        echo "<p>Passes décisives : {$row['Passes decisives']}</p>";
        echo "<p>xA : {$row['xA']}</p>";
        echo "<p>Duels par 90 : {$row['Duels par 90']}</p>";
        echo "<p>Duels gagnés % : {$row['Duels gagnes. %']}</p>";
        echo "<p>Pays de naissance : {$row['Pays de naissance']}</p>";
        echo "<p>Passeport pays : {$row['Passeport pays']}</p>";
        echo "<p>Pied : {$row['Pied']}</p>";
        echo "<p>Taille : {$row['Taille']}</p>";
        echo "<p>Poids : {$row['Poids']}</p>";
        echo "<p>Duels défensifs gagnés % : {$row['Duels defensifs gagnés. %']}</p>";
        echo "<p>Duels aériens gagnés % : {$row['Duels aériens gagnés. %']}</p>";
      
      }
      ?>
    </div>
  </div>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-lg-6">
      <h2 class="mb-4">Acheter le rapport de <?php echo $row['Joueur']; ?></h2>
      <p>Obtenez un rapport détaillé sur les performances du joueur, y compris des analyses statistiques approfondies et des commentaires d'experts en recrutement.</p>
    </div>
    <div class="col-lg-6">
      <form action="achat.php" method="post">
        <input type="hidden" name="joueur" value="<?php echo $row['Joueur']; ?>">
        <button type="submit" class="btn btn-primary">Acheter le rapport</button>
      </form>
    </div>
  </div>
</div>
        
 
    <div class="col-lg-3">
      <img src="graphiques.jpg" alt="Graphiques des statistiques du joueur" class="img-fluid">
    </div>
  </div>
</div>





  <!-- Footer -->
  <footer class="
        d-flex
        flex-wrap
        justify-content-between
        align-items-center
        py-3
        my-4
        border-top
      ">
    <p class="col-md-4 mb-0 text-muted">&copy; 2023 AthenaScout, Inc</p>

    <a class="navbar-brand" href="index.html"><img src="Logo.png" height="40" alt="logo" loading="lazy" />
    </a>

    <ul class="nav col-md-4 justify-content-end">
       
      <li class="nav-item">
        <a href="FAQ.php" class="nav-link px-2 text-muted">FAQ</a>
      </li>
      <li class="nav-item">
        <a href="QuiSommesNous.php" class="nav-link px-2 text-muted">Qui Sommes Nous ?</a>
      </li>
    </ul>
  </footer>
  <!-- Footer -->
</body>
</html>
