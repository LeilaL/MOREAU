<?php
require_once("dbconnect/db_connection.php");

// FUNCTION FOR INSERT IN BDD
function insertInBdd($title, $description, $dead_line)
{
  $bdd = get_dataBase();
  $req = $bdd->prepare('INSERT INTO projects SET title = ?, description = ?, dead_line = ?');
  $req->execute(array(
    $title, $description, $dead_line
  ));
}

// FUNCTION FOR GET INFO FROM BDD FOR MAIN PAGE
function getInfos()
{
  $bdd = get_dataBase();
  $donnees = $bdd->prepare('SELECT * FROM projects');
  $donnees->execute();
  $resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
  return $resultat;
}
