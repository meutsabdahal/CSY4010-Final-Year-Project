<?php
    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/vendorLogInTemplate.php", ['categories' => $categories]);

?>