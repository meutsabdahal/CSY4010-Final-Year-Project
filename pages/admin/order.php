<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // calling function to join three tables and extract all the data from those tables
        $orders = $productorder->joinThreeTable('product', 'productId', 'productId', 'vendor', 'vendorId', 'vendorId');

        // getting id from productOrder table and changing its status value by calling the function
        if(isset($_GET['oId'])){
            $orders = $productorder->updateValues('orderStatus', 1, 'orderId', $_GET['oId']);
            header("Location:order");
        }

        // getting id from productOrder table and changing its status value by calling the function
        if(isset($_GET['wId'])){
            $orders = $productorder->updateValues('orderStatus', 2, 'orderId', $_GET['wId']);
            header("Location:order");
        }

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminOrder.php", ['orders' => $orders]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>