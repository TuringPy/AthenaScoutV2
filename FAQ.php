<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>FAQ - AthenaScout</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="mdb.min.css" />
    <link rel="stylesheet" href="style.css" />

</head>
  
  <body>
   
  <?php include('navbar.php'); ?>



  <div class="container my-5">
    <h1 class="text-center mb-4">FAQ - Foire Aux Questions</h1>

    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Qu'est-ce que le scouting ?
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            Le scouting est une activité qui consiste à observer et évaluer les performances des joueurs de football, afin de détecter les talents et les futurs grands joueurs. Les scouts sont des professionnels qui travaillent pour des clubs de football ou des agences de scouting, et ils utilisent des techniques d'observation, d'analyse vidéo et de statistiques pour évaluer les joueurs.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Comment fonctionne votre service de scouting en ligne ?
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            Notre service de scouting en ligne vous permet d'accéder à une base de données de joueurs de football du monde entier, avec des informations détaillées sur leur profil, leurs performances, leurs statistiques et leurs vidéos. Vous pouvez effectuer des recherches et des filtrages pour trouver les joueurs qui correspondent le mieux à vos besoins de recrutement, et vous pouvez contacter directement les joueurs ou leurs agents pour engager des négociations.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Comment puis-je m'abonner à votre service de scouting en ligne ?
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            Pour vous abonner à notre service de scouting en ligne, vous pouvez vous rendre sur notre site web et choisir l'abonnement qui correspond à vos besoins. Nous proposons différents niveaux d'abonnement, avec des fonctionnalités et des tarifs adaptés à vos attentes. Vous pouvez effectuer votre paiement en ligne et commencer à utiliser notre service immédiatement.
</div>
</div>
</div>

<div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Comment puis-je contacter votre équipe de support ?
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        Si vous avez des questions ou des problèmes avec notre service, vous pouvez contacter notre équipe de support par e-mail, téléphone ou chat en direct. Nous sommes disponibles 24h/24 et 7j/7 pour répondre à toutes vos questions et vous aider à résoudre vos problèmes.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Est-ce que votre service de scouting en ligne est réservé aux professionnels du football ?
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
        Non, notre service de scouting en ligne est ouvert à tous les passionnés de football, qu'ils soient professionnels ou amateurs. Que vous soyez un club de football, un agent de joueurs, un entraîneur, un recruteur ou un simple fan de football, vous pouvez utiliser notre service pour trouver les meilleurs talents et les futurs stars du football.
      </div>
    </div>
  </div>
</div>



<?php include('footer.php'); ?>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
  
  </html>
