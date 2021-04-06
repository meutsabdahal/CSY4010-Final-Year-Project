<?php
    $categories = $category->findAll();
    if (isset($_POST['submit'])) {

        $proposal = $_FILES['proposal']['name'];
        $tempPicture = $_FILES['proposal']['tmp_name'];
        move_uploaded_file($tempPicture, 'proposal/'.$proposal);

        $_POST['proposal'] = $proposal;
        // $vendor->insert($_POST);
        print_r($_POST);
       
        }
    

    $title = "MeKart";

    $content = loadTemplate("templates/vendorRegistrationTemplate.php", ['categories' => $categories]);

?>