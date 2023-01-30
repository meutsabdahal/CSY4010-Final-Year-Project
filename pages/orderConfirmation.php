<?php
    session_start();
    if (isset($_SESSION['sessCustomerId'])) {
        $categories = $category->findAll();

        $title = "MeKart";
        
        $content = loadTemplate("templates/orderConfirmation.php", ['categories' => $categories]);
    }
    else
        include 'logIn.php';
?>