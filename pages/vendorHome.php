<?php
    // starting session and checking customer's login
    session_start();
    if (isset($_SESSION['sessVendorId'])) {

        // calling the function to delete a row from product table
        if(isset($_GET['pId'])){
            $products = $product->delete('productId',$_GET['pId']);	
        }

        // calling function to extarct all the data from category table
        $categories = $category->findAll();

        // calling afunction to join two tables with condition
        $products = $product->joinTableCondition('category', 'categoryId', 'categoryId', 'vendorId', $_SESSION['sessVendorId']);

        // giving title to the page
        $title = "MeKart";
        
        // calling function for displaying contents on the page
        $content = loadTemplate("templates/vendorHome.php", ['categories' => $categories, 'products' => $products]);

    }
    // when venodr is not loggedin displing vendor's login page
    else
        include 'vendorLogIn.php';
    

    
?>