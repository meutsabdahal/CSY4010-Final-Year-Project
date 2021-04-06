<?php

    if (isset($_SESSION['sessCustomerId'])) {
        $categories = $category->findAll();
        $title = "MeKart";

        $content = loadTemplate("templates/paymentOptionTemplate.php", ['categories'=>$category]);
    }
    else
        include 'logIn.php';

?>