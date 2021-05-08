<?php
    // starting session
    session_start();

    // calling function to extarct all the data from slideshow table
    $slideshows = $slideshow->findAll();

    // calling function to extarct all the data from category table
    $categories = $category->findAll();

    // calling function to extarct all the data from product table
    $products = $product->findAll();

    // giving title to the page
    $title = "MeKart";

    // calling function for displaying contents on the page
    $content = loadTemplate("templates/homeTemplate.php", ['slideshows' => $slideshows, 'categories' => $categories, 'products' => $products]);

?>