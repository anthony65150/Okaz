<?php
require_once "templates/header.php";
require_once "libs/pdo.php";
require_once "libs/user.php";

$errors = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $verif = verifyUser($_POST);
    if ($verif === true) {
        $resAdd = addUser($pdo, $_POST["username"], $_POST["email"], $_POST["password"]);
        header("Location: connexion.php");
    } else {
        $errors = $verif;
    }
}
?>


<div class="form-signin w-100 m-auto">
    <h1 class="mb-3 text-center">Inscription</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label" for="username">Nom d'utilisateur</label>
            <input class="form-control" type="text" name="username" id="username">
            <?php if (isset($errors["username"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["username"] ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
            <?php if (isset($errors["email"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["email"] ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" id="password">
            <?php if (isset($errors["password"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors["password"] ?>
                </div>
            <?php } ?>
        </div>
        <button class="btn btn-primary w-100" type="submit" name="add_user">S'inscrire</button>
    </form>
</div>


<?php
require_once "templates/footer.php";
?>