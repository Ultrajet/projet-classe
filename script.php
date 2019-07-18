<?php 
$bdd = new PDO('mysql:host=localhost;dbname=liste_contacts;charset=utf8', 'root', '');

$reponse = $bdd->prepare("SELECT * FROM etudiants WHERE id_contact = :id");