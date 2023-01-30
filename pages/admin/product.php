<?php
    session_start();
    if (isset($_SESSION['sessAdminId'])) {
        $title = "MeKart";

        if(isset($_GET['pId'])){
            $products = $product->delete('productId',$_GET['pId']);	
        }

        $products = $product->joinTable('vendor','vendorId', 'vendorId');

        $content = loadTemplate("templates/adminProduct.php", ['products' => $products]);
    }
    else
        include 'adminLogIn.php';

?>