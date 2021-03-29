<?php

    $slideshows = $slideshow->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/homeTemplate.php", ['slideshows' => $slideshows]);

?>