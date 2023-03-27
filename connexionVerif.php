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



// Vérification de la connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    
    // Vérification des informations de connexion
    $stmt = $pdo->prepare('SELECT id, email, passwordHash FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['passwordHash'])) {
        $_SESSION['user_id'] = $user['id'];
        // Connexion réussie
        header("Location: index.php");
        exit;
    } else {
        // Erreur de connexion
        $errorMessage = "Adresse e-mail ou mot de passe invalide.";
        echo "<div class='alert alert-danger mt-3' role='alert'>$errorMessage</div>";
    }
}

?>