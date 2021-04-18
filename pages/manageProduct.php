<?php
    session_start();
    if (isset($_SESSION['sessVendorId'])) {

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
        $categories = $category->findAll();
        $title = "MeKart";

        $content = loadTemplate("templates/manageProduct.php", ['categories' => $categories]);
    }
    else
        include 'vendorLogIn.php';

?>