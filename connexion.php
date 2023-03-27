<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connexion - AthenaScout</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="mdb.min.css" />
    <link rel="stylesheet" href="style.css" />

</head>
<body>
<?php include('navbar.php'); ?>
  <!-- Navbar -->
<?php include('connexionVerif.php'); ?>



  <div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title text-center mb-4">Connexion</h1>
          <form action="connexion.php" method="post">
            <div class="form-floating mb-3">
              <label for="email" class="form-label">Adresse e-mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-floating mb-3">
              <label for="password" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-flex justify-content-center">
              <button type="reset" class="btn btn-secondary mx-2">Réinitialiser</button>
              <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>
   <!-- footer -->  

</body>
</html>