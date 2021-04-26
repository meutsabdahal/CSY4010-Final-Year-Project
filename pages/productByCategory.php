<?php
    session_start();
    $categories = $category->findAll();
    $title = "MeKart";

    $products = $product->find('categoryId', $_GET['cId']);

    $content = loadTemplate("templates/productByCategoryTemplate.php", ['categories' => $categories, 'products' => $products]); 

?>