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


function verifyUser($user): array | bool
{
    $errors = [];

    if (isset($user["username"])) {
        if ($user["username"] === "") {
            $errors["username"] = 'Le champ "Nom d\'utilisateur" est obligatoire ';
        } elseif ($user["email"] === "") {
            $errors["email"] = 'Le champ "Email" est obligatoire ';
            if (!filter_var($user["email"], FILTER_VALIDATE_EMAIL)) {
                $errors["email"] = "Le format d'email n'est pas respecté";
            }
        } elseif ($user["password"] === "") {
            $errors["password"] = 'Le champ "Mot de passe" est obligatoire ';
        }
    }
    if (count($errors)) {
        return $errors;
    } else {
        return true;
    }
}

//---------------------------------------------FONCTION DEBUG-----------------------------------------------------

/*function verifyUserLoginPassword(PDO $pdo, string $email, string $password): bool|array
{
    $email = trim($email);
    $password = trim($password);

    $query = $pdo->prepare("SELECT id, username, email, password FROM user WHERE email = :email");
    $query->bindValue(":email", $email);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);

    echo "<pre>";
    echo "Email entré : $email\n";
    echo "Mot de passe entré : $password\n";
    echo "Résultat de la base :\n";
    var_dump($user);
    echo "</pre>";

    if ($user && password_verify($password, $user["password"])) {
        echo "Mot de passe OK ✅<br>";
        unset($user["password"]);
        return $user;
    } else {
        echo "Mot de passe NON valide ❌<br>";
        return false;
    }
}*/





function verifyUserLoginPassword(PDO $pdo, string $email, string $password): bool|array
{
    $query = $pdo->prepare("SELECT id, username, email, password FROM user WHERE email = :email");
    $query->bindValue(":email", $email);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user["password"])) {
        return $user;
    } else {
        return false;
    }
}
