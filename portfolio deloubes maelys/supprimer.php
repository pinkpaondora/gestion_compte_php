<?php

$nomserveur = "localhost";

$nomutilisateur = "root";

$motdepasse = "root";

$nomdelabase = "projet";

$port = 8889;

$conn = new mysqli($nomserveur, $nomutilisateur, $motdepasse, $nomdelabase, $port);


if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = "DELETE FROM portfolio WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Donnée supprimée avec succès.";
    } else {
        echo "Erreur lors de la suppression de la donnée : " . $conn->error;
    }
} else {
    echo "ID non spécifié.";
}

// Fermer la connexion
$conn->close();

header("Location: contact.php");
?>