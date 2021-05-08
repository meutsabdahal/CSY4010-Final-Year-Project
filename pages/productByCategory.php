<?php
    // starting session
    session_start();

    // calling function to extarct all the data from category table
    $categories = $category->findAll();

    // giving title to the page
    $title = "MeKart";

    $products = $product->find('categoryId', $_GET['cId']);

    // calling function for displaying contents on the page
    $content = loadTemplate("templates/productByCategoryTemplate.php", ['categories' => $categories, 'products' => $products]); 

?>