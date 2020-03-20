<?php

require_once 'functions/db_nl.php';

$pdo = getPdo();

$query = 'INSERT INTO users (email_nl) VALUES (email)';
$stmt = $pdo->prepare($query);

$insert = $stmt->execute([
    'email_nl' => "lolo@test.com",
]);
echo ($insert) ? "Inscrition réussie" : "Inscription échouée";
//je pense pas que ce code marche