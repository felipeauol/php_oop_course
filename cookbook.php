<?php

include "recipes.php";
include "render.php";


$recipe1 = new Recipe();
$recipe1->setSource("Felipe Oliveira");
$recipe1->setTitle("Honey Hooch");
$recipe1->addIngredient("honey", 1, "tbsp");
$recipe1->addIngredient("water", 2, "cup");
$recipe1->setYield("2 pints");

$recipe2 = new Recipe();
$recipe2->setSource("Betty Crocker");
$recipe2->setTitle("Kombucha");


$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");


$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

echo Render::displayRecipe($recipe1);