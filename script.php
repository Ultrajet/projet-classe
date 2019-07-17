<?php try {
    $bdd = new PDO('mysql:host=localhost;dbname=developpeurs;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Appel des noms

$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = ?");
($dev = $reponse->fetch());