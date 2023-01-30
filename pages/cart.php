<?php
    session_start();
    // if (isset($_SESSION['sessCustomerId'])) {
        $categories = $category->findAll();
        $carts = $cart->joinTableCondition('product', 'productId', 'productId', "customerId", $_SESSION['sessCustomerId']);
        $title = "MeKart";
    
        $content = loadTemplate("templates/cartTemplate.php", ['categories' => $categories, 'carts' =>$carts ]);
    
    // }

    // else
    //     include 'logIn.php'
?>