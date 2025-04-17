<?php
$id = (int)$_GET["id"];
$query = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();

//fetch() nous permet de recuperer une seule ligne

$result = $query->fetch(PDO::FETCH_ASSOC);

//$result est un tableau associatif qu'on peut manipuler
