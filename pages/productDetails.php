<?php
    session_start();
    $categories = $category->findAll();

    $products = $product->find('productId', $_GET['pId']);
    
    $allProducts = $product->findAll();
    // $allProducts = $allProducts->fetch();

    $reviews = $review->joinTableCondition('customer', 'customerId', 'customerId', 'productId', $_GET['pId']);

    
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);
        if (isset($_SESSION['sessCustomerId'])) {
            $review->insert($_POST);  
            header('Refresh:0');
        }
        else
            echo "hello";
    }

    if (isset($_POST['cart'])) {
        unset($_POST['cart']);
        $cart->insert($_POST);
    }
    

    $title = "MeKart";

    $content = loadTemplate("templates/productDetailsTemplate.php", ['categories' => $categories, 'products' => $products, 'allProducts' => $allProducts,
                                                                        'reviews' => $reviews]);

?>