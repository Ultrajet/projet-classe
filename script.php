<?php

$bdd = new PDO('mysql:host=localhost;dbname=liste_contacts', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

define("URL", "http://localhost:8888/projet-classe/img/");