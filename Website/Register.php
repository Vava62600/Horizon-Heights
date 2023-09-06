<?php
// Récupérer les données du formulaire d'inscription
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Se connecter à la base de données
$conn = mysqli_connect('localhost', 'vava', '170210', 'Usr.sql');

// Vérifier la connexion
if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
}

// Insérer l'utilisateur dans la base de données
$sql = "INSERT INTO utilisateurs (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Inscription réussie!";
} else {
    echo "Oh non, quelque chose s'est mal passé. nos équipes travailles sur cette incident. Ressayez plus tard ! " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
