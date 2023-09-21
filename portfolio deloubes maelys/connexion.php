<?php


$nomserveur = "localhost";

$nomutilisateur = "root";

$motdepasse = "root";

$nomdelabase = "projet";

$port = 8889;

$conn = new mysqli($nomserveur, $nomutilisateur, $motdepasse, $nomdelabase, $port);

$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("La connexion à la base de donnée a échoué : " . $conn->connect_error);
} 

$nom = $_POST["nom"] ?? "";
$prenom = $_POST["prenom"] ?? "";
$email = $_POST["email"] ?? "";
$sujet = $_POST["sujet"] ?? "";
$message = $_POST["message"] ?? "";

// requête sql

$stmt = $conn->prepare("INSERT INTO portfolio (nom, prenom, email, sujet, message) VALUES (?,?,?,?,?)");

$stmt->bind_param("sssss", $nom, $prenom, $email, $sujet,$message); //bind_param lie les variables

//executer requête sql

if ($stmt->execute() === TRUE){
    echo "Votre message a été envoyé avec succès !";
    echo "<a href='contact.php'>Retour à la page</a>";
} else {
    echo "Une erreur s'est produite lors de l'envoie du message : " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
