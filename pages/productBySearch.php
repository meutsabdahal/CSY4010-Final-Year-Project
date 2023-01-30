<?php
    session_start();
    $categories = $category->findAll();

    if (isset($_POST['submit'])) {
        $products = $product->findProducts('productName','%'.$_POST['search'].'%');
    }
    $title = "MeKart";

    $content = loadTemplate("templates/productBySearchTemplate.php", ['categories' => $categories, 'products' => $products]);

?>