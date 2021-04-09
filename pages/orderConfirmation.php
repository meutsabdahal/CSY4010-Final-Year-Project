<?php
    $categories = $category->findAll();

    $title = "MeKart";
    
    $content = loadTemplate("templates/orderConfirmation.php", ['categories' => $categories]);
?>