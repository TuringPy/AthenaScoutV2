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
}

  // Récupération des données sur l'abonnement en stock
  $query = "SELECT * FROM abonnement_base WHERE id = :id";
  $stmt = $pdo->prepare($query);
  $stmt->execute(array('id' => 2));
  $abonnement = $stmt->fetch(PDO::FETCH_ASSOC);

  // Traitement de l'achat d'un abonnement
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $quantite = intval($_POST['quantite']);

      // Vérification de la disponibilité du stock
      if ($quantite > $abonnement['stock']) {
          echo '<div class="alert alert-danger">Désolé, il n\'y a pas assez d\'abonnements en stock.</div>';
      } else {
          // Mise à jour du stock dans la base de données
          $nouveau_stock = $abonnement['stock'] - $quantite;
          $query = "UPDATE abonnement_base SET stock = :stock WHERE id = :id";
          $stmt = $pdo->prepare($query);
          $stmt->execute(array('stock' => $nouveau_stock, 'id' => 2));

          // Affichage du message de confirmation
          $prix_total = $abonnement['prix'] * $quantite;
          echo '<div class="alert alert-success">Merci pour votre achat ! Vous avez acheté ' . $quantite . ' abonnement(s) pour un total de ' . $prix_total . ' €.</div>';
      }
  }

?>






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
<?php include('navbar.php'); ?>
<?php 
if (!isset($_SESSION['user_id'])) {
    header('Location: Connexion.php');
    exit();
}
?>

<body>

  <div class="container my-5">
    <div class="row">
      <div class="col-md-6 mb-5">
        <img src="Image/abonnement-base.png" alt="Abonnement de base" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <h1 class="mb-4">Abonnement de base</h1>
        <p class="lead mb-3">Notre abonnement de base vous donne accès à :</p>
        <ul class="mb-3">
          <li><?= $abonnement['recommandations_par_mois'] ?> recommandations de recrutement par mois</li>
          <li><?= $abonnement['liste_joueurs'] ?></li>
          <li><?= $abonnement['recherche_joueurs'] ?></li>
        </ul>
        <p class="lead mb-4">Le coût de l'abonnement est de <?= $abonnement['prix'] ?> € par mois.</p>
        <p class="lead mb-4">Il reste <?= $abonnement['stock'] ?> abonnements en stock.</p>
        <form method="post" action="achat_abonnementPremium.php">
          <div class="form-group mb-4">
            <label for="quantite">Quantité :</label>
            <input type="number" name="quantite" id="quantite" min="1" max="<?= $abonnement['stock'] ?>" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Acheter</button>
        </form>
      </div>
    </div>
  </div>

</body>
<?php include('footer.php'); ?>

</html>
