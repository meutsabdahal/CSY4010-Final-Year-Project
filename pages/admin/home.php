<?php
    session_start();
    if (isset($_SESSION['sessAdminId'])) {
        $categories = $category->countRow();
        $categories = $categories->fetch();

        $products = $product->countRow();
        $products = $products->fetch();

        $admins = $admin->countRow();
        $admins = $admins->fetch();

        $customers = $customer->countRow();
        $customers = $customers->fetch();

        $title = "MeKart";

        $content = loadTemplate("templates/adminHome.php", ['categories' => $categories, 'products' => $products, 'admins' => $admins,
                                                                'customers' => $customers]);
    }
    else
        include 'adminLogIn.php';
?>