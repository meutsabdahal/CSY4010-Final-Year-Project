<?php
    session_start();
    $slideshows = $slideshow->findAll();
    $categories = $category->findAll();

    $products = $product->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/homeTemplate.php", ['slideshows' => $slideshows, 'categories' => $categories, 'products' => $products]);

?>