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

// Vérifier si le formulaire d'achat a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer la quantité d'abonnement souhaitée
  $quantite = $_POST['quantite'];
  
  // Vérifier si le stock est suffisant pour la quantité demandée
  $query = "SELECT stock FROM abonnement_base WHERE id = 1"; // Remplacer "1" par l'ID de l'abonnement souhaité
  $stmt = $pdo->query($query);
  $abonnement = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($abonnement['stock'] < $quantite) {
    echo "Désolé, il n'y a pas assez d'abonnements en stock.";
    exit;
  }
  
  // Mettre à jour le stock d'abonnements
  $query = "UPDATE abonnement_base SET stock = stock - :quantite WHERE id = 2"; // Remplacer "1" par l'ID de l'abonnement souhaité
  $stmt = $pdo->prepare($query);
  $stmt->bindValue(':quantite', $quantite, PDO::PARAM_INT);
  $stmt->execute();
  
  // Calculer le montant total de l'achat
  $query = "SELECT prix FROM abonnement_base WHERE id = 2"; // Remplacer "1" par l'ID de l'abonnement souhaité
  $stmt = $pdo->query($query);
  $abonnement = $stmt->fetch(PDO::FETCH_ASSOC);
  $montant_total = $abonnement['prix'] * $quantite;
  
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Inscription - AthenaScout</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="mdb.min.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>
  <?php include('navbar.php'); ?>
  <!-- Navbar -->
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">Confirmation d'achat</h5>
    <p class="card-text">Merci d'avoir acheté <?php echo $quantite; ?> abonnement(s) pour un montant total de <?php echo $montant_total; ?> €.</p>
  </div>
</div>

  <?php include('footer.php'); ?>
  <!-- footer -->  

</body>

</html>