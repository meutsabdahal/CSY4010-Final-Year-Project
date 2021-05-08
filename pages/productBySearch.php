<?php
    // starting session
    session_start();

    // calling function to extarct all the data from category table
    $categories = $category->findAll();

    // calling function to search for product
    if (isset($_POST['submit'])) {
        $products = $product->findProducts('productName','%'.$_POST['search'].'%');
    }

    // giving title to the page
    $title = "MeKart";

    // calling function for displaying contents on the page
    $content = loadTemplate("templates/productBySearchTemplate.php", ['categories' => $categories, 'products' => $products]);

?>