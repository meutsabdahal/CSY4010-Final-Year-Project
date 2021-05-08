<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // calling function to insert images to slideshow table
        if (isset($_POST['submit'])) {
        unset($_POST['submit']);

            $picture = $_FILES['images']['name'];
            $tempPicture = $_FILES['images']['tmp_name'];
            move_uploaded_file($tempPicture, 'slideshow/'.$picture);

            $_POST['images'] = $picture                                         ;
            $slideshow->insert($_POST);
            header('Location:slideshow');
        }

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminManageSlideshow.php", []);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>