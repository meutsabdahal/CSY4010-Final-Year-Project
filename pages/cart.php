<?php
    // starting session and checking customer's login
    session_start();
    if (isset($_SESSION['sessCustomerId'])) {

        // calling function to extarct all the data from category table
        $categories = $category->findAll();

        // calling function to join two tables with cindition
        $carts = $cart->joinTableCondition('product', 'productId', 'productId', "customerId", $_SESSION['sessCustomerId']);

        // giving title to the page
        $title = "MeKart";
    
        // calling function for displaying contents on the page
        $content = loadTemplate("templates/cartTemplate.php", ['categories' => $categories, 'carts' =>$carts ]);
    
    }
    // when customer is not loggedin displing customer's login page
    else
        include 'logIn.php'
?>