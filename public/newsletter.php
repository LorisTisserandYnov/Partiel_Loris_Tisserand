<?php

require_once '../functions/db_nl.php';

$pdo = getPdo();

$query = 'INSERT INTO users (email) VALUES (email)';
$stmt = $pdo->prepare($query);

$insert = $stmt->execute([
    'email' => "paul@gmail.com",
]);
echo ($insert) ? "Inscrition réussie" : "Inscription échouée";