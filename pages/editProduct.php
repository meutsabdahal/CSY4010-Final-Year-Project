<?php
    session_start();
    if (isset($_SESSION['sessVendorId'])) {

        $products = $product->find('productId',$_GET['pId']); 
        $products = $products->fetch(); 

        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $product->update($_POST, 'productId');
            header("Location:vendorHome");
        }
        $categories = $category->findAll();
        $title = "MeKart";

        $content = loadTemplate("templates/editProduct.php", ['categories' => $categories, 'products' => $products]);
    }
    else
        include 'vendorLogIn.php';

?>