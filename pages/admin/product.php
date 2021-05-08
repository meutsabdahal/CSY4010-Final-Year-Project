<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // giving title to the page
        $title = "MeKart";

        // getting id from product table and deleting that id by calling the function
        if(isset($_GET['pId'])){
            $products = $product->delete('productId',$_GET['pId']);	
        }

        // calling function to join two tables and extarct all the data from those tables
        $products = $product->joinTable('vendor','vendorId', 'vendorId');

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminProduct.php", ['products' => $products]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>