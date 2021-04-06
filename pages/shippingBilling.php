<?php
    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/shippingBillingTemplate.php", ['categories' => $categories]);

?>