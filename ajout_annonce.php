<?php
require_once "templates/header.php";
require_once "libs/category.php";
$categories = getCategories();
?>


<div class="form-listing w-100 m-auto">
    <h1 class="mb-3 text-center">Ajouter une annonce</h1>
    <form action="" method="$_POST">
        <div class="mb-3">
            <label class="form-label" for="title">Titre</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Prix</label>
            <input class="form-control" type="number" name="price" id="price">
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="category">Catégories</label>
            <select class="form-select" name="category" id="categorie">
                <?php foreach ($categories as $key => $category) { ?>
                    <option value="<?= $key ?>"><?= $category["name"] ?></option>
                <?php } ?>
            </select>
        </div>
        <button class="btn btn-primary w-100" type="submit">Ajouter</button>
    </form>
</div>


<?php
require_once "templates/footer.php";
?>