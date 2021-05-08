<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {
    
        // getting id from slideshow table and deleting that id by calling the function
        if(isset($_GET['sId'])){
            $slideshows = $slideshow->delete('slideshowId',$_GET['sId']);	
        }

        // calling function to extarct all the data from slideshow table
        $slideshows = $slideshow->findAll();

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminSlideshow.php", ['slideshows' => $slideshows]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>