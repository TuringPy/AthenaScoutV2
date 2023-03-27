<?php

session_start();

// Si l'utilisateur clique sur un lien de déconnexion
if (isset($_GET['logout'])) {
  // Détruire la session active
  session_destroy();
  // Rediriger l'utilisateur vers la page de connexion
  header('Location: Connexion.php');
  exit();
}
?>


<nav class="navbar navbar-expand-lg bg-light navbar-light" id="mainNav">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="index.php"><img src="Image/Logo.png" height="40" alt="logo" loading="lazy" />
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
            <a class="nav-link" href="Tarification.php">Tarifs</a>
          </li>

         
          <?php if (!isset($_SESSION['user_id'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Inscription">Inscription</a>
                    </li>
                <?php } ?>

            </ul>

            <!-- Icons -->
            <ul class="navbar-nav d-flex flex-row ms-auto">
                <?php
                $isConnected = isset($_SESSION['user_id']);

                if ($isConnected) {
                ?>
                    <!-- Lien de déconnexion -->
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="index.php?logout=true"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                <?php
                } else {
                ?>
                    <!-- Lien de connexion -->
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="connexion.php"><i class="fas fa-sign-in-alt"></i></a>
                    </li>
                <?php
                }
                ?>
            </ul>

        </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  
  