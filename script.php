<?php

$bdd = new PDO('mysql:host=localhost;dbname=liste_contacts', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

define("URL", "http://localhost/GitHub/projet-classe/img/thumbnail/");