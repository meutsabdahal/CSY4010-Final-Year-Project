<?php
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        $orders = $productorder->joinThreeTable('product', 'productId', 'productId', 'vendor', 'vendorId', 'vendorId');

        if(isset($_GET['oId'])){
            $orders = $productorder->updateValues('orderStatus', 1, 'orderId', $_GET['oId']);
            header("Location:order");
        }

        if(isset($_GET['wId'])){
            $orders = $productorder->updateValues('orderStatus', 2, 'orderId', $_GET['wId']);
            header("Location:order");
        }

        $title = "MeKart";

        $content = loadTemplate("templates/adminOrder.php", ['orders' => $orders]);
    }
    else
        include 'adminLogIn.php';

?>