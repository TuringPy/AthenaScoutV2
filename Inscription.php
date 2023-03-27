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
<?php include('InscriptionVerif.php'); ?>

<div class="container my-5">
<div class="row justify-content-center">
<div class="col-md-6 col-lg-5">
<div class="card">
<div class="card-body">
<h1 class="card-title text-center mb-4">Inscription</h1>
<form action="inscription.php" method="post">
<div class="form-floating mb-3">
<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Prénom" required>
<label for="firstName">Prénom</label>
</div>
<div class="form-floating mb-3">
<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nom de famille" required>
<label for="lastName">Nom de famille</label>
</div>
<div class="form-floating mb-3">
<input type="email" class="form-control" id="email" name="email" placeholder="Adresse email" required>
<label for="email">Adresse email</label>
</div>
<div class="form-floating mb-3">
<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
<label for="password">Mot de passe</label>
</div>
<div class="form-floating mb-3">
<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirmation du mot de passe" required>
<label for="confirmPassword">Confirmation du mot de passe</label>
</div>
<div class="form-check mb-3">
<input type="checkbox" class="form-check-input" id="termsAndConditions" name="termsAndConditions" required>
<label class="form-check-label" for="termsAndConditions">J'ai lu et accepté les <a href="#">conditions générales d'utilisation</a>.</label>
</div>
<button type="submit" class="btn btn-primary d-block w-100">S'inscrire</button>
</form>
<hr>
<p class="text-center mb-0">Déjà inscrit ? <a href="connexion.php">Connectez-vous ici</a>.</p>
</div>
</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>
   <!-- footer -->  

</body>

</html>
