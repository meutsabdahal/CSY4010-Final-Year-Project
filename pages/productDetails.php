<?php
    session_start();
    $categories = $category->findAll();

    $products = $product->find('productId', $_GET['pId']);
    
    $allProducts = $product->findAll();
    // $allProducts = $allProducts->fetch();
    $title = "MeKart";

    $content = loadTemplate("templates/productDetailsTemplate.php", ['categories' => $category, 'products' => $products, 'allProducts' => $allProducts]);

?>