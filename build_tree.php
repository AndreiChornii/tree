<?php

require 'Category.php';

$DB = new DB();
$category = new Category($DB, "SELECT * FROM `category`");
$data = $category->getData();
//var_dump($data);


$tree = $category->createTree($data);
//var_dump($tree);

$category->renderTemplate($tree);
