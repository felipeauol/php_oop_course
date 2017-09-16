<?php

include "recipes.php";
include "render.php";


$recipe1 = new Recipe("Honey Hooch");
$recipe1->addIngredient("honey", 1, "tbsp");
$recipe1->addIngredient("water", 2, "cup");
$recipe1->setYield("2 pints");

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

$recipe2 = new Recipe("Kombucha","Betty Crocker");

echo Render::displayRecipe($recipe1);