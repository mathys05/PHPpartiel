<?php
  <?php
include 'connexion.php';

error_reporting(0);
session_start();

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];

$conn = new mysqli('localhost', 'root', 'root', 'tppartiel');
if ($conn->connect_error) {
    die('Connection failed: ' . $cconn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT into tppartiel (nom, prenom, age) values (?, ?, ?)");
    $stmt->bind_param("ssss", $nom, $prenom, $age);
    $stmt->execute();
    echo "<script>alert('Inscription reussie'); window.location='index.php'</script>";
    $stmt->close();
    $conn->close();
}



  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php


  // Supprimer un utilisateur
// $requete = $bdd->exec('DELETE FROM users WHERE prenom = "Etienne"');


