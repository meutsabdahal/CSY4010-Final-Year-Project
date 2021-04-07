<?php

    $categories = $category->findAll();

    $title = "MeKart";
    
    $content = loadTemplate("templates/vendorHome.php", ['categories' => $categories]);
    

    
?>