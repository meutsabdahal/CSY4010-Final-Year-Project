<?php
    session_start();
    if (isset($_SESSION['sessVendorId'])) {

        $categories = $category->findAll();
        $products = $product->find('vendorId', $_SESSION['sessVendorId']);

        $title = "MeKart";
        
        $content = loadTemplate("templates/vendorHome.php", ['categories' => $categories, 'products' => $products]);

    }
    else
        include 'vendorLogIn.php';
    

    
?>