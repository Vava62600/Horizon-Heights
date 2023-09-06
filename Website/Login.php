<?php
// Récupérer les données du formulaire de connexion
$email = $_POST['email'];
$password = $_POST['password'];

// Se connecter à la base de données
$conn = mysqli_connect('localhost', 'nom_utilisateur', 'mot_de_passe', 'nom_base_de_données');

// Vérifier la connexion
if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
}

// Rechercher l'utilisateur dans la base de données
$sql = "SELECT * FROM utilisateurs WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

// Si l'utilisateur est trouvé, rediriger vers la page d'accueil
if (mysqli_num_rows($result) == 1) {
    header("Location: home.html");
} else {
    echo "Nous avons l'impression que Vos données sont incorect. ";
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
