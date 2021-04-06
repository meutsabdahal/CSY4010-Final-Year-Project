<?php
    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/logInTemplate.php", ['categories'=>$categories]);

?>