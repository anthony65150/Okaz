<?php
require_once "templates/header.php";
?>

<div class="form-signin w-100 m-auto">
    <form>
        <h1 class="mb-3 text-center">Connexion</h1>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="nom@email.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Mot de passe">
            <label for="floatingPassword">Mot de passe</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Connexion</button>
        <p class="mt-5 mb-3 text-body-secondary">© 2017–2025</p>
    </form>

</div>


<?php
require_once "templates/footer.php";
?>