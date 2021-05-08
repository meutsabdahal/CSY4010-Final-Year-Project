<?php
    // starting session and checking vendor's login
    session_start();
    if (isset($_SESSION['sessVendorId'])) {

        // inserting data and images to product table
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            
            $thumnailImage = rand(1,10000).'-'.$_FILES['thumnailImage']['name'];
            $tempPicture = $_FILES['thumnailImage']['tmp_name'];
            move_uploaded_file($tempPicture, 'productImages/'.$thumnailImage);
            $_POST['thumnailImage'] = $thumnailImage;

            $productImage = rand(1,10000).'-'.$_FILES['productImage']['name'];
            $tempPicture = $_FILES['productImage']['tmp_name'];
            move_uploaded_file($tempPicture, 'productImages/'.$productImage);
            $_POST['productImage'] = $productImage;
            $product->insert($_POST);
            header('Location:vendorHome');
        
        }

        // calling function to extarct all the data from category table
        $categories = $category->findAll();

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/manageProduct.php", ['categories' => $categories]);
    }
    // when vendor is not loggedin displing vendor's login page
    else
        include 'vendorLogIn.php';

?>