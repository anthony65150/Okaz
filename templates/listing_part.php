<div class="col-md-4 my-2 d-flex">
    <div class="card w-100">
        <img src="/uploads/listing/<?php echo $listing["image"] ?>" class="card-img-top" alt="<?php echo $listing["title"] ?>">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo $listing["title"] ?></h5> <!--pour avoir une syntaxe plus courte on peut faire ?= $listing["title"] -->
            <p class="card-text"><?php echo $listing["price"] ?> €</p>
            <div class="mt-auto">
                <a href="/annonce.php?id=<?php echo $listing["id"] ?>" class="btn btn-primary stretched-link w-100">Voir l'annonce</a>
            </div>
        </div>
    </div>
</div>