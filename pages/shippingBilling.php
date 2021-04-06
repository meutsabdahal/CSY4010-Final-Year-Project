<?php
    session_start();
    if (isset($_SESSION['sessCustomerId'])) {
        $categories = $category->findAll();
        $title = "MeKart";

        $content = loadTemplate("templates/shippingBillingTemplate.php", ['categories' => $categories]);
    }
    else
        include 'loggedIn.php';
?>