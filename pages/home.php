<?php

    $slideshows = $slideshow->findAll();
    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/homeTemplate.php", ['slideshows' => $slideshows, 'categories' => $categories]);

?>