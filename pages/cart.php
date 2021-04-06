<?php
    
    if (isset($_SESSION['sessCustomerId'])) {
        $categories = $category->findAll();

        $title = "MeKart";
    
        $content = loadTemplate("templates/cartTemplate.php", ['categories' => $categories]);
    
    }

    else
        include 'logIn.php'
?>