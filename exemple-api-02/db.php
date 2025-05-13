<?php

$dbConfig = [
    'hote' => 'localhost',
    'nomBD' => 'contacts',
    'nomUtilisateur' => 'root',
    'motDePasse' => ''
];

$db = new PDO("mysql:host={$dbConfig['hote']};dbname={$dbConfig['nomBD']};charset=utf8", $dbConfig['nomUtilisateur'], $dbConfig['motDePasse']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fait en sorte que les tableaux associatifs retournés par les requêtes ne contiennent que des clés correspondant aux noms des colonnes
// (autrement il y a aussi des clés "0", "1", "2", etc.)
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>
