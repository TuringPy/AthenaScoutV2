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

// Vérification si l'utilisateur est déjà connecté
if (isset($_SESSION['user_id'])) {
    // Redirection vers la page d'accueil 
    header('Location: index.php');
    exit();
  }

// Vérification des données envoyées par le formulaire
if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_POST['confirmPassword'], $_POST['termsAndConditions'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    // Vérification des champs requis
    if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        $errorMessage = 'Tous les champs sont obligatoires.';
        echo "<div class='alert alert-danger mt-3' role='alert'>$errorMessage</div>";
        exit;
    }

    // Vérification du format de l'adresse email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'L\'adresse email n\'est pas valide.';
        echo "<div class='alert alert-danger mt-3' role='alert'>$errorMessage</div>";
        exit;
    }

    // Vérification que les mots de passe correspondent
    if($password !== $confirmPassword) {
        $errorMessage = 'Les mots de passe ne correspondent pas.';
        echo "<div class='alert alert-danger mt-3' role='alert'>$errorMessage</div>";
        exit;
    }

    // Vérification que l'adresse email n'est pas déjà utilisée
    $stmt = $pdo->prepare('SELECT COUNT(*) FROM users WHERE email = :email');
    $stmt->execute(array('email' => $email));
    $count = $stmt->fetchColumn();
    if($count > 0) {
        $errorMessage = 'Cette adresse email est déjà utilisée.';
        echo "<div class='alert alert-danger mt-3' role='alert'>$errorMessage</div>";
        exit;
    }

    // Hachage du mot de passe
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insertion des données dans la base de données
    $stmt = $pdo->prepare('INSERT INTO users (firstName, lastName, email, passwordHash) VALUES (:firstName, :lastName, :email, :password)');$stmt->execute(array(
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'password' => $password
        ));

    // Redirection vers la page de connexion
    header('Location: connexion.php');
    exit;
}
?>