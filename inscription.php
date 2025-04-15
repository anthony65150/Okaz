<?php
require_once "templates/header.php";
?>


<div class="form-signin w-100 m-auto">
    <h1 class="mb-3 text-center">Inscription</h1>
    <form action="" method="$_POST">
        <div class="mb-3">
            <label class="form-label" for="username">Nom d'utilisateur</label>
            <input class="form-control" type="text" name="username" id="username">
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Mot de passe</label>
            <input class="form-control" type="text" name="password" id="password">
        </div>
        <button class="btn btn-primary w-100" type="submit">S'inscrire</button>
    </form>
</div>


<?php
require_once "templates/footer.php";
?>