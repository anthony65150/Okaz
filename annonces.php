<?php
require_once "templates/header.php";
require_once "libs/listing.php";
$listings = getListings();
?>

<div class="row">
    <h1> Les annonces</h1>
    <div class="col-md-3">
        <form action="" method="get">
            <h2>Filtres</h2>
            <div class="p-3 border-bottom">
                <input type="text" placeholder="Recherche" name="search" id="search" class="form-control">
            </div>
            <div class="p-2 border-bottom">
                <label for="price">Prix</label>
                <div class="input-group p-3">
                    <input type="number" name="min-price" id="min-price" class="form-control" placeholder="Prix minimun">
                    <span class="input-group-text">€</span>
                </div>
                <div class="input-group p-3">
                    <input type="number" name="max-price" id="max-price" class="form-control" placeholder="Prix maximun">
                    <span class="input-group-text">€</span>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary w-100">Rechercher</button>
            </div>
        </form>
    </div>

    <div class="col-md-9">
        <div class="row">
            <?php foreach ($listings as $key => $listing) {
                require "templates/listing_part.php";
            }
            ?>
        </div>

    </div>
</div>




<?php
require_once "templates/footer.php"
?>