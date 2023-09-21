<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom']; 
    $email = $_POST['email']; 
    $sujet = $_POST['sujet']; 
    $message = $_POST['message']; 

    $fichier = 'fichier.txt';

    $handle = fopen($fichier, 'a') or die('Impossible d\'ouvrir le fichier.');

    
    $donnees = $nom . ' ' . $prenom . ' ' . $email . ' ' . $sujet . ' ' . $message . "\n";

    fwrite($handle, $donnees);

    fclose($handle);

   
    header("Location: index.php"); }

    ?>