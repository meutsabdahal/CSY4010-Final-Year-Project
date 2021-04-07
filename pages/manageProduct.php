<?php


    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/manageProduct.php", ['categories' => $categories]);

?>