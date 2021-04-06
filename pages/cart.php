<?php
    $categories = $category->findAll();

    $title = "MeKart";

    $content = loadTemplate("templates/cartTemplate.php", ['categories' => $categories]);

?>