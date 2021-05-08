<?php
    // starting session and checking customer's login
    session_start();
    if (isset($_SESSION['sessCustomerId'])) {

        // calling function to extarct all the data from category table
        $categories = $category->findAll();

        // giving title to the page
        $title = "MeKart";
        
        // calling function for displaying contents on the page
        $content = loadTemplate("templates/orderConfirmation.php", ['categories' => $categories]);
    }
    // when customer is not loggedin displing customer's login page
    else
        include 'logIn.php';
?>