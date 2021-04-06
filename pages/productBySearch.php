<?php
    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/productBySearchTemplate.php", ['categories' => $categories]);

?>