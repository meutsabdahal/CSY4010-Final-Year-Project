<?php
    session_start();
    $categories = $category->findAll();

    $products = $product->find('productId', $_GET['pId']);
    
    $allProducts = $product->findAll();
    // $allProducts = $allProducts->fetch();

    if (isset($_SESSION['sessCustomerId'])) {
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $review->insert($_POST);  
            header('Refresh:0');
        }
    }
    else
        echo "hello";

    $title = "MeKart";

    $content = loadTemplate("templates/productDetailsTemplate.php", ['categories' => $category, 'products' => $products, 'allProducts' => $allProducts]);

?>