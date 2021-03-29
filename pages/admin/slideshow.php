<?php

    $slideshows = $slideshow->findAll();

    $title = "MeKart";

    $content = loadTemplate("templates/adminSlideshow.php", ['slideshows' => $slideshows]);

?>