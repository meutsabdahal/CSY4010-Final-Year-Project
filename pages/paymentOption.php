<?php
    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/paymentOptionTemplate.php", ['categories'=>$category]);

?>