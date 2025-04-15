<?php

function getListings(): array
{
    return [
        ["title" => "test1", "price" => 52, "image" => "nadine-e-YsPnamiHdmI-unsplash.jpg", "description" => "test description"],
        ["title" => "test2", "price" => 25, "image" => "nadine-e-YsPnamiHdmI-unsplash.jpg"],
        ["title" => "test3", "price" => 12, "image" => "nadine-e-YsPnamiHdmI-unsplash.jpg"],
    ];
}


function getListingById(int $id): array
{
    $listing = getListings();
    return $listing[$id];
}
