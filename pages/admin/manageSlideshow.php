<?php

    if (isset($_POST['submit'])) {
    unset($_POST['submit']);

        

            $picture = $_FILES['images']['name'];
            $tempPicture = $_FILES['images']['tmp_name'];
            move_uploaded_file($tempPicture, 'slideshow/'.$picture);

            // $parts = explode('.', $_FILES['images']['name']);
            // $extension = end($parts);
            // $fileName = uniqid() . '.' . $extension;
            // move_uploaded_file($_FILES['cv']['tmp_name'], 'slideshow/' . $fileName);

            $_POST['images'] = $picture                                         ;
            $slideshow->insert($_POST);
            header('Location:slideshow');
        // print_r($_FILES);
        
    }

    $title = "MeKart";

    $content = loadTemplate("templates/adminManageSlideshow.php", []);

?>