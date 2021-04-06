<?php
    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/productDetailsTemplate.php", ['categories' => $category]);

?>