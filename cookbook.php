<?php

include "recipes.php";
include "render.php";
include "inc/recipes.php";


$recipe1 = new Recipe("Honey Hooch");
$recipe1->addIngredient("honey", 1, "tbsp");
$recipe1->addIngredient("water", 2, "cup");
$recipe1->setYield("2 pints");

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

echo Render::displayRecipe($recipe1);

echo "<br/><br/><br/>";
echo Render::displayRecipe($belgian_waffles);