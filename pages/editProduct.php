<?php
    // starting session and checking vendor's login
    session_start();
    if (isset($_SESSION['sessVendorId'])) {

        // calling function to extarct all the data with productId, pId from product table
        $products = $product->find('productId',$_GET['pId']); 
        $products = $products->fetch(); 

        // calling function to update the roe
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $product->update($_POST, 'productId');
            header("Location:vendorHome");
        }

        // calling function to extarct all the data from category table
        $categories = $category->findAll();

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/editProduct.php", ['categories' => $categories, 'products' => $products]);
    }
    // when vendor is not loggedin displing vendor's login page
    else
        include 'vendorLogIn.php';

?>