<?php

require_once "libs/user.php";
require_once "libs/pdo.php";
require_once "templates/header.php";

$error = null;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = verifyUserLoginPassword($pdo, $_POST["email"], $_POST["password"]);
    if ($user) {
        session_regenerate_id(true);
        $_SESSION["user"] = [
            "id" => $user["id"],
            "username" => $user["username"]
        ];
        header("location: index.php");
    } else {
        $error = "Email ou mot de passe incorrect";
    }
}
?>

<div class="form-signin w-100 m-auto">
    <form method="post">
        <h1 class="mb-3 text-center">Connexion</h1>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="nom@email.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Mot de passe">
            <label for="floatingPassword">Mot de passe</label>
        </div>
        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <button class="btn btn-primary w-100 py-2" type="submit">Connexion</button>
        <p class="mt-5 mb-3 text-body-secondary">© 2017–2025</p>
    </form>

</div>


<?php
require_once "templates/footer.php";
?>