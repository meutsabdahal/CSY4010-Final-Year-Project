<?php
    session_start();
    if (isset($_SESSION['sessCustomerId'])) {
        $categories = $category->findAll();

        $orders = $productorder->joinTableCondition('product', 'productId', 'productId', 'customerId', $_SESSION['sessCustomerId']);

        $title = "MeKart";
        
        $content = loadTemplate("templates/profile.php", ['categories' => $categories, 'orders' => $orders]);
    
    }

    else
        include 'logIn.php'
?>