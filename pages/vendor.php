<?php
    session_start();
    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/vendorTemplate.php", ['categories' => $categories]);

?>