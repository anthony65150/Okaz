<?php

function addUser(PDO $pdo, string $username, string $email, string $password): bool
{
    $query = $pdo->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query->bindValue(':username', $username);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);

    return $query->execute();
};


function verifyUser($user): bool | array
{
    $errors = [];

    if (isset($user["username"])) {
        if ($user["username"] === "") {
            $errors["username"] = 'Le champ "Nom d\'utilisateur" est obligatoire ';
        }
    }
    if (count($errors)) {
        return $errors;
    } else {
        return true;
    }
}
