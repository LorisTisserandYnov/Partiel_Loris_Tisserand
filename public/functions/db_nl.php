<?php

/**
 * Une petite fonction, sans objet, pour récupérer une instance de PDO
 *
 * @return PDO
 */
function getPdo(): PDO
{
  try {
    // A FAIRE : séparer les coordonnées de la base de données dans un fichier non intégré au dépôt git
    $pdo = new PDO(
      "mysql:host=localhost;dbname=partiel_newsletter", //je n'arrive pas à accédes a mes bases de donnée pour X ou Y raison pardon si ca ne marche pas.
      "partiel_newsletter",
      "IHS0U074j9Y3Aw6E"
    );
    return $pdo;
  } catch(PDOException $ex) {
    exit("Erreur lors de la connexion à la base de données");
  }
}