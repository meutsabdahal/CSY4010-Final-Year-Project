<?php
    session_start();
    if (isset($_SESSION['sessAdminId'])) {
    
        if(isset($_GET['sId'])){
            $slideshows = $slideshow->delete('slideshowId',$_GET['sId']);	
        }

        $slideshows = $slideshow->findAll();

        $title = "MeKart";

        $content = loadTemplate("templates/adminSlideshow.php", ['slideshows' => $slideshows]);
    }
    else
        include 'adminLogIn.php';

?>