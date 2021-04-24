<?php
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        if (isset($_POST['submit'])) {
        unset($_POST['submit']);

            $picture = $_FILES['images']['name'];
            $tempPicture = $_FILES['images']['tmp_name'];
            move_uploaded_file($tempPicture, 'slideshow/'.$picture);

            $_POST['images'] = $picture                                         ;
            $slideshow->insert($_POST);
            header('Location:slideshow');
        }

        $title = "MeKart";

        $content = loadTemplate("templates/adminManageSlideshow.php", []);
    }
    else
        include 'adminLogIn.php';

?>