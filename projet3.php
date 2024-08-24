<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Afficher les informations du client
    echo "<h1>Informations du Client</h1>";
    echo "<p><strong>Nom:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Téléphone:</strong> $phone</p>";
} else {
    echo "Aucune donnée reçue.";
}
?>