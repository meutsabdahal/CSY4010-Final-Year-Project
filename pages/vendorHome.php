<?php
    session_start();
    if (isset($_SESSION['sessVendorId'])) {

        if(isset($_GET['pId'])){
            $products = $product->delete('productId',$_GET['pId']);	
        }
        $categories = $category->findAll();

        $products = $product->joinTableCondition('category', 'categoryId', 'categoryId', 'vendorId', $_SESSION['sessVendorId']);
        // $products = $product->find('vendorId', $_SESSION['sessVendorId']);

        $title = "MeKart";
        
        $content = loadTemplate("templates/vendorHome.php", ['categories' => $categories, 'products' => $products]);

    }
    else
        include 'vendorLogIn.php';
    

    
?>